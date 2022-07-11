<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstWebController extends Controller
{
    // test
    public function showString()
    {
        # code...
        return 'Web controller';
    }
}
