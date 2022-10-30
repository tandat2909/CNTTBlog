<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{

    protected string $cacheTag = 'md';

    public $exists = true;

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

    public abstract static function validateBeforeSave($data):bool;


}
