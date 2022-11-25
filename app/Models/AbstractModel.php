<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    protected array $validateMethods = ['create','update'];


    use HasFactory;

    protected string $cacheTag = 'md';


    protected int $limit = 10;


    protected static array $data = [];

    public function Collection(): \Illuminate\Support\LazyCollection
    {
        return $this::all()->take($this->limit)->lazy();
    }

    public static function getData(): array
    {
        return self::$data;
    }

    public static function setData(array $data = [])
    {
        if(!empty($data))
            self::$data = $data;
    }

    /**
     * @return array
     */
    public function getValidateMethods(): array
    {
        return $this->validateMethods;
    }

    /**
     * @param array $validateMethods
     */
    public function setValidateMethods(array $validateMethods): void
    {
        $this->validateMethods = $validateMethods;
    }

    public function addValidateMethod(string $method):void
    {
        if(!in_array($method, $this->validateMethods))
        {
            $this->validateMethods[] = $method;
        }
    }

    /**
     * @param $data
     * @return bool
     * @throws Exception
     */
    public function validateBeforeSave(array $data):bool
    {
        foreach ($data[0] ?? [] as $field => $value) {
            if (!in_array($field,$this->fillable))
            {
                throw new \Exception("$field does not exist or has not been declared");
            }
        }
        return true;
    }


    public function __call($method, $parameters)
    {
        if(in_array($method,$this->getValidateMethods())){
           $this->validateBeforeSave($parameters);
        }
        return parent::__call($method, $parameters);

    }





}
