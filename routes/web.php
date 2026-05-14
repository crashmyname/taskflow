<?php

use App\Controllers\TaskController;
use Bpjs\Framework\Helpers\Route;
use Bpjs\Framework\Helpers\View;

Route::get('/',[TaskController::class,'index']);