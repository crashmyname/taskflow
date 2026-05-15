<?php

namespace App\Controllers;

use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class ReportController extends BaseController
{
    // Controller logic here
    public function indexProductivity()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('reports/productivity.stanley');
        }
        return view('reports/productivity.stanley',[''],'layouts/app.stanley');
    }

    public function indexTaskProgress()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('reports/taskprogress.stanley');
        }
        return view('reports/taskprogress.stanley',[''],'layouts/app.stanley');
    }

    public function indexTeamPerformance()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('reports/teamperformance.stanley');
        }
        return view('reports/teamperformance.stanley',[''],'layouts/app.stanley');
    }
}
