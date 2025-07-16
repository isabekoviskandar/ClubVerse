<?php

namespace App\Domain\Auth\Interface;

use Illuminate\Http\Request;

interface AuthInterface{

    public function login(Request $request);
    public function register(Request $request);
}