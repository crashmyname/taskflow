<?php

namespace App\Controllers;

use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class DashboardController extends BaseController
{
    // Controller logic here
    public function index()
    {
        $data = [
            'total_task' => 20,
            'pending_task' => 8,
            'completed_task' => 12,
            'overdue_task' => 0,
            'team_activity' => 1,
            'recent_comments' => 5,
            'upcoming_deadlines' => 1
        ];
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('dashboard/dashboard.stanley',compact('data'));
        }
        return view('dashboard/dashboard.stanley',compact('data'),'layouts/app.stanley');
    }
}
