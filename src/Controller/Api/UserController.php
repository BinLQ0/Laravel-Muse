<?php

namespace Binlq0\Muse\Controller\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        return User::all();
    }
}
