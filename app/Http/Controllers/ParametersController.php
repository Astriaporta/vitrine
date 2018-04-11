<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informations;
use App\Modules;
use App\Social;

class ParametersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $informations = Informations::first();
    $modules = Modules::otherOption();
    $menu = Modules::menu();
    $socialNotUsed = Social::notUsed();
    $socialUse = Social::orderBy('name', 'asc')->get();

    return view('parameters.index')->with([
      'informations' => $informations,
      'modules' => $modules,
      'menuListe' => $menu,
      'socialNotUsed' => $socialNotUsed,
      'socialUse' => $socialUse
    ]);
  }
}
