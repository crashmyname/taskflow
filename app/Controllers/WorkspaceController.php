<?php

namespace App\Controllers;

use App\Services\WorkspaceService;
use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class WorkspaceController extends BaseController
{
    // Controller logic here
    protected $workspaceService;
    public function __construct(){
        $this->workspaceService = new WorkspaceService();
    }
    public function index()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('workspace/workspace.stanley');
        }
        return view('workspace/workspace.stanley',[''],'layouts/app.stanley');
    }

    public function detail()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('workspace/detail-workspace.stanley');
        }
        return view('workspace/detail-workspace.stanley',[''],'layouts/app.stanley');
    }

    public function indexMember()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('workspace/members.stanley');
        }
        return view('workspace/members.stanley',[''],'layouts/app.stanley');
    }

    public function getWorkspace(Request $request)
    {
        $workspace = $this->workspaceService->getWorkspace([
            'search' => $request->input('search',''),
        ]);
        return json($workspace);
    }

    public function createWorkspace(Request $request)
    {
        $workspace = $this->workspaceService->create($request->all());
        return json($workspace);
    }
}
