<?php

namespace App\Http\Controllers;

use App\Social;
use App\Http\Requests\SocialValidationRules;
use Illuminate\Http\Request;

class SocialController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function store(SocialValidationRules $request)
  {
    Social::create($request->only('prefix', 'name', 'link'));

    return back();
  }

  public function update(SocialValidationRules $request, $id)
  {
    $social = Social::find($id);
    $social->prefix = $request['prefix'];
    $social->name = $request['name'];
    $social->link = $request['link'];
    $social->save();
  }

  public function destroy($id)
  {
    $social = Social::find($id);
    $social->delete();
  }
}
