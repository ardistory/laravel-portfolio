<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuestController extends Controller
{
    public function getIndex(): Response
    {
        return response()->view('homepage');
    }
}
