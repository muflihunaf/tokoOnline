<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Response;

class UserApiController extends Controller
{
    public function index()
    {
        $user = User::get();

        return UserResource::collection($user);
    }
}
