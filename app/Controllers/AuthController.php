<?php

namespace App\Controllers;

use App\Services\AuthService;
use Bpjs\Framework\Helpers\Auth;
use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class AuthController extends BaseController
{
    // Controller logic here
    protected $authService;
    public function __construct(){
        $this->authService = new AuthService();
    }
    public function index()
    {
        return view('auth/login.stanley');
    }
    public function login(Request $request)
    {
        $login = $this->authService->login($request->all());
        return json([
            'status' => $login['status'],
            'message' => $login['message'] ?? 'success',
            'data' => $login['data'] ?? null
        ],$login['status']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
