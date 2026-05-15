<?php

namespace App\Controllers;

use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class ProjectController extends BaseController
{
    // Controller logic here
    public function index()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('projects/project.stanley');
        }
        return view('projects/project.stanley',[''],'layouts/app.stanley');
    }

    public function detail()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('projects/detail-project.stanley');
        }
        return view('projects/detail-project.stanley',[''],'layouts/app.stanley');
    }

    public function indexCreate()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('projects/create-project.stanley');
        }
        return view('projects/create-project.stanley',[''],'layouts/app.stanley');
    }
}
