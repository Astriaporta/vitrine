<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;
use App\Modules;

class AboutController extends Controller
{
  public $module;

  public function __construct()
  {
    $this->middleware('auth')->except(['index']);

    $this->module = Modules::information('about');
  }

  public function index()
  {
    $contens = Contents::filter([
      'modules_id' => $this->module->id
      ])->get();

    return view('about.index')->with([
      'contens' => $contens
    ]);
  }

  public function create()
  {
    return view('contents.form')->with([
      'menu' => $this->module
    ]);
  }

  public function edit($id)
  {
    $contens = Contents::find($id);

    return view('contents.form')->with([
      'menu' => $this->module,
      'id' => $id,
      'contens' => $contens
    ]);
  }
}
