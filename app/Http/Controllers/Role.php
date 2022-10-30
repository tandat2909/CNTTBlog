<?php

namespace App\Http\Controllers;
use App\Models\Role as RoleModel;

class Role extends AbstractController implements InterfaceBasicMethodController
{
    protected mixed $classModel = RoleModel::class;
    protected string $template = 'admin/roles';


}
