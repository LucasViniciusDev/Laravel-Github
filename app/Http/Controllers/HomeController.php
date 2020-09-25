<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class HomeController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $userName   = $request->has('user_name') ? $request->input('user_name') : null;
        $userResult = $userName ? $this->userService->getByName($userName) : $this->userService->getAll();

        if(isset($userResult) && isset($userResult->error))
        {
            return view('error', [
                'error' => $userResult
            ]);
        }

        $users = is_array($userResult->response) ? $userResult->response : [$userResult->response];

        return view('home', [
            'users' => $users,
            'not_found' => $userResult->httpCode != 200
        ]);
    }
}
