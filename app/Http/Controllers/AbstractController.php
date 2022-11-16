<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

abstract class AbstractController extends BaseController implements InterfaceBasicMethodController
{
    protected mixed $classModel;

    protected string $template = '';

    protected string $templateDetail = 'detail';

    protected string $symbolTemplate = '.';

    protected array $dataView = [];

    protected array $breadcrumbs = [];

    /**
     * Value
     * [
     *      "action name" => [ List Permission]
     * ]
     * @var array
     */
    protected array $requirePermissionAction = [];

    protected array $requireRole = [];




    /**
     * @inheritDoc
     */
    public function callAction($method, $parameters)
    {
        if($this->checkRole()){
            if($this->checkPermission($method)){
                $this->autoAddBreadcrumb();
                return parent::callAction($method, $parameters);
            }
        }
       return redirect()->route('404');

    }

    /**
     * @return void
     */
    protected function autoAddBreadcrumb(): void
    {
        $array = explode('\\', get_class($this));
        $controller =  array_pop($array);
        $this->addBreadcrumb($controller,[
                'label'=>$controller,
                'link' => URL::route('index')
            ]
        );
    }

    /**
     * @return string
     */
    public function getTemplateDetail(): string
    {
        return $this->templateDetail;
    }

    /**
     * @param string $templateDetail
     */
    public function setTemplateDetail(string $templateDetail): void
    {
        $this->templateDetail = $templateDetail;
    }


    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    /**
     * @return array
     */
    public function getBreadcrumbs(): array
    {
        return $this->breadcrumbs;
    }

    /**
     * @param array $breadcrumbs
     */
    public function setBreadcrumbs(array $breadcrumbs): void
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     *
     * structure Data
     *
     * {
     *   'label' => 'Home',
     *   'link'  => '/index',
     * }
     * @param $key
     * @param $data
     * @return void
     */
    public function addBreadcrumb(string $key,array $data)
    {
        if(empty($this->breadcrumbs)){
            $this->breadcrumbs['Home'] = [
                'label' => 'Home',
                'link' => URL::route('index')
            ];
        }
        if(!array_key_exists($key,$this->breadcrumbs)){
            if(!isset($data['link'])){
                $data['link'] = '';
            }
            $this->breadcrumbs[$key] = $data;
        }

    }


    /**
     * @return array
     */
    protected function getDataView(): array
    {
        return $this->dataView;
    }

    /**
     * @param array $dataView
     */
    protected function setDataView(array $dataView): void
    {
        $this->dataView = $dataView;
    }

    protected function addDataView(string $key,$value):static
    {
        if(!empty($key)){
            $this->dataView[$key] = $value;
        }
        return $this;
    }

    /**
     * @param string $key
     * @return mixed
     */
    protected function getValue(string $key): mixed
    {
        if(!empty($key)){
            return $this->dataView[$key] ;
        }
        return null;
    }


    /**
     * @return Model
     */
    protected function getClassModel(): mixed
    {
        return $this->classModel;
    }

    /**
     * @param mixed $model
     */
    protected function setClassModel( mixed $model): static
    {
        $this->classModel = $model;
        return $this;
    }

    public function get($id)
    {
        if($id){
            $entity = $this->classModel::find($id);
            $this->addDataView('entity',$entity);
            return view ($this->template.$this->symbolTemplate.$this->templateDetail,$this->dataView);
        }
        return view ($this->template,['entity'=>null]);


    }

    public function create(array $data)
    {
        $instance = $this->classModel::create($data);
        $instance->addToIndex();

    }

    public function delete($id)
    {
        if($id){
            $entity = $this->classModel::find($id);
            $entity->delete();
            return $this->getView();
        }
        return redirect()->route(RouteServiceProvider::HOME);
    }

    public function getAll()
    {
        $this->addDataView('listEntity',$this->classModel::all());
        return $this->getView();
    }

    public function search($keyword)
    {
        return 'please implement method that';
    }

    public function checkPermission(string $method): bool
    {
        if(array_key_exists($method,$this->requirePermissionAction))
        {
            $permissionRequire = $this->requirePermissionAction[$method];
            if(empty($permissionRequire)) return true;
            $user = Auth::user();
            if($user){
                $permissionRole = $user->role->permisstions->filter(function ($permission){
                    return $permission->active == true;
                })->all();
                foreach ( $permissionRequire  as $item) {
                    if(!in_array($item,$permissionRole)){
                        return false;
                    }
                }
                return true;
            }
            return false;

        }
        return true;
    }

    protected function checkRole(): bool
    {
        if(!empty($this->requireRole)){
            $user = Auth::user();
            if($user){
                $role = $user->role->slug;
                return in_array($role,$this->requireRole);
            }
            return false;
        }
        return true;
    }



    /**
     * @return string
     */
    public function getSymbolTemplate(): string
    {
        return $this->symbolTemplate;
    }

    /**
     * @param string $symbolTemplate
     * @return AbstractController
     */
    public function setSymbolTemplate(string $symbolTemplate): AbstractController
    {
        if(!empty($symbolTemplate)){
            $this->symbolTemplate = $symbolTemplate;
        }

        return $this;
    }

    /**
     * @param string $template
     * @param bool $useTemplateDetail
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    protected function getView(string $template = '',bool $useTemplateDetail = false): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        if(empty($template))
        {
            $template = $this->template.($useTemplateDetail? $this->symbolTemplate.$this->templateDetail:'');
        }
        $this->addDataView('breadcrumbs',$this->getBreadcrumbs());
        return view($template,$this -> dataView);
    }
}
