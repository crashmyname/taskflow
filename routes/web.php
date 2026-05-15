<?php

use App\Controllers\AuthController;
use App\Controllers\CollaborationController;
use App\Controllers\DashboardController;
use App\Controllers\ProjectController;
use App\Controllers\ReportController;
use App\Controllers\TaskController;
use App\Controllers\TeamController;
use App\Controllers\WorkspaceController;
use Bpjs\Framework\Helpers\AuthMiddleware;
use Bpjs\Framework\Helpers\Route;
use Bpjs\Framework\Helpers\View;

Route::get('/login',[AuthController::class,'index'])->name('view.login');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::group([AuthMiddleware::class], function(){
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    // TASK
    Route::get('/mytask',[TaskController::class,'index'])->name('mytask');

    // ALL TASK
    Route::get('/alltask',[TaskController::class,'indexAllTask'])->name('alltask');

    // KANBAN
    Route::get('/kanban',[TaskController::class,'indexKanban'])->name('kanban');

    // CALENDAR
    Route::get('/calendar',[TaskController::class,'indexCalendar'])->name('calendar');

    // COMPLETED TASK
    Route::get('/complete/task',[TaskController::class,'indexCompleteTask'])->name('complete.task');

    // WORKSPACE
    Route::get('/workspace',[WorkspaceController::class,'index'])->name('view.workspace');
    Route::get('/workspace-members',[WorkspaceController::class,'indexMember'])->name('view.members');
    Route::get('/workspace/data',[WorkspaceController::class,'getWorkspace'])->name('data.workspace');
    Route::post('/workspace',[WorkspaceController::class,'createWorkspace'])->name('create.workspace');
    Route::put('/workspace/{id}',[WorkspaceController::class,'updateWorkspace'])->name('update.workspace');
    Route::delete('/workspace/{id}',[WorkspaceController::class,'destroyWorkspace'])->name('destroy.workspace');

    // PROJECT
    Route::get('/project',[ProjectController::class,'index'])->name('view.project');
    Route::get('/create-project',[ProjectController::class,'indexCreate'])->name('view.create.project');
    Route::get('/project/data',[ProjectController::class,'getProject'])->name('data.project');
    Route::post('/project',[ProjectController::class,'createProject'])->name('create.project');
    Route::put('/project/{id}',[ProjectController::class,'updateProject'])->name('update.project');
    Route::delete('/project/{id}',[ProjectController::class,'destroyProject'])->name('destroy.project');

    // TEAMS
    Route::get('/teams/user',[TeamController::class,'indexUser'])->name('view.team.user');
    Route::get('/teams/roles',[TeamController::class,'indexRoles'])->name('view.team.roles');

    // COLLABORATION
    // COMMENTS
    Route::get('/collaboration/comments',[CollaborationController::class,'indexComments'])->name('view.collaboration.comments');

    // Attachment
    Route::get('/collaboration/attachments',[CollaborationController::class,'indexAttachments'])->name('view.collaboration.attachments');

    // Activity
    Route::get('/collaboration/activity',[CollaborationController::class,'indexActivity'])->name('view.collaboration.activity');
    
    // REPORTS
    Route::get('/reports/productivity',[ReportController::class,'indexProductivity'])->name('view.reports.productivity');
    Route::get('/reports/task-progress',[ReportController::class,'indexTaskProgress'])->name('view.reports.taskprogress');
    Route::get('/reports/teamperformance',[ReportController::class,'indexTeamPerformance'])->name('view.reports.teamperformance');

    Route::get('/workspace/detail',[WorkspaceController::class,'detail'])->name('detail.workspace');
    Route::get('/project/detail',[ProjectController::class,'detail'])->name('detail.project');
    Route::get('/task/detail',[TaskController::class,'detail'])->name('detail.task');
});