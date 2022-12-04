<?php

namespace App\Http\Controllers;

interface InterfaceBasicMethodController
{
    public function get($id);

    public function create(array $data);

    public function delete($id);

    public function getAll();

    public function search($keyword);

    public function checkPermission(string $action):bool;
}
