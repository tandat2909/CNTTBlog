<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InterfaceBasicMethodController;
use Illuminate\Database\Eloquent\Model;


abstract class AbstractController extends Controller implements InterfaceBasicMethodController
{
    protected mixed $classModel;

    protected string $template = '';

    protected string $templateDetail = 'detail';

    protected string $symbolTemplate = '.';

    protected array $dataView = [];



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

    public function create($data)
    {
        if(is_array($data) and $this->classModel::validateBeforeSave($data)){
            return new $this->classModel->newInstance();
        }
        return new $this->classModel->newInstance();

    }

    public function delete($id)
    {
        if($id){
            $entity = $this->classModel::find($id);
            $entity->delete();
            return $this->getView();
        }
        return $this->getView(true);
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

    public function checkPermission(): bool
    {
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

    protected function getView(string $template = '',bool $useTemplateDetail = false)
    {
        if(empty($template))
        {
            $template = $this->template.($useTemplateDetail? $this->symbolTemplate.$this->templateDetail:'');
        }
        return view($template,$this-> dataView);
    }
}
