<?php

namespace App\Controllers;

use App\Models\Todo;
use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class TaskController extends BaseController
{
    // Controller logic here
    public function index()
    {
        $todos = Todo::query()->get();
        return view('task/mytask.stanley',compact('todos'),'layouts/app.stanley');
    }
}
