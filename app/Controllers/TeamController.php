<?php

namespace App\Controllers;

use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class TeamController extends BaseController
{
    // Controller logic here
    public function indexUser()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('teams/users.stanley');
        }
        return view('teams/users.stanley',[''],'layouts/app.stanley');
    }

    public function indexRoles()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('teams/roles.stanley');
        }
        return view('teams/roles.stanley',[''],'layouts/app.stanley');
    }
}
