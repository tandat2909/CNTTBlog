<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role as RoleModel;


class Role extends AbstractControllerAdmin
{
    protected mixed $classModel = RoleModel::class;
    protected string $template = 'admin/roles';


}
