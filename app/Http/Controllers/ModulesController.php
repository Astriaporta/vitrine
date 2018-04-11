<?php

namespace App\Http\Controllers;

use App\Modules;
use App\Http\Requests\ModulesValidationRules;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModulesValidationRules $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModulesValidationRules $request, $id)
    {
      $module = Modules::find($id);
      $module->activated = $request['activated'];
      $module->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //$module = Modules::find($id);
      //$module->delete();
    }
}
