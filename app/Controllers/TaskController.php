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
    public function detail()
    {
        $todos = Todo::query()->get();
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('task/detail-task.stanley',compact('todos'));
        }
        return view('task/detail-task.stanley',compact('todos'),'layouts/app.stanley');
    }

    public function index()
    {
        $todos = Todo::query()->get();
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('task/mytask.stanley',compact('todos'));
        }
        return view('task/mytask.stanley',compact('todos'),'layouts/app.stanley');
    }

    public function indexAllTask()
    {
        $todos = Todo::query()->get();
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('task/alltask.stanley',compact('todos'));
        }
        return view('task/alltask.stanley',compact('todos'),'layouts/app.stanley');
    }

    public function indexKanban()
    {
        $todos = Todo::query()->get();
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('task/kanban.stanley',compact('todos'));
        }
        return view('task/kanban.stanley',compact('todos'),'layouts/app.stanley');
    }

    public function indexCalendar()
    {
        $todos = Todo::query()->get();
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('task/calendar.stanley',compact('todos'));
        }
        return view('task/calendar.stanley',compact('todos'),'layouts/app.stanley');
    }

    public function indexCompleteTask()
    {
        $todos = Todo::query()->get();
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('task/completedtask.stanley',compact('todos'));
        }
        return view('task/completedtask.stanley',compact('todos'),'layouts/app.stanley');
    }
}
