<?php

namespace App\Http\Controllers;

interface InterfaceBasicMethodController
{
    public function get($id);

    public function create($data);

    public function delete($id);

    public function getAll();

    public function search($keyword);

    public function checkPermission():bool;
}
