<?php

namespace App\Http\Controllers;

use Antonday\Quickmetrics\Quickmetrics;
use Illuminate\Http\Request;

class QuickmetricsController extends Controller
{
    

    public function test()
    {
        return Quickmetrics::event("user.signin", 123);
    }
}
