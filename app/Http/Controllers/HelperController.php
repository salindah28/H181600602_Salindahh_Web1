<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    function refreshCapcha(){
        return captcha_img();
    }
}
