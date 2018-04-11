<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest');
  }
  public function index()
  {
    return view('layouts.validation.captcha');
  }

  public function update($id)
  {
    return response()->json(['captcha'=> captcha_img()]);
  }
}
