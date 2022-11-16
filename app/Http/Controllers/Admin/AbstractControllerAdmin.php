<?php declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


abstract class AbstractControllerAdmin extends Controller
{
    protected array $requireRole = [\App\Models\Role::ADMIN];


}
