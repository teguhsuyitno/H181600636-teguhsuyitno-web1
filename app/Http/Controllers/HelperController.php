<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    function refreshCaptcha(){
        return captcha_img( 'flat');
    }
}
