<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Client\Response as ClientResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return response()->json([
            'users' => $users
        ],Response::HTTP_OK);
    }

    public function show(User $user) {
        return response()->json(['user' => $user], Response::HTTP_OK);
    }
}
