<?php

namespace App\Http\Controllers;

use App\Contents;
use App\Http\Requests\ContentsValidationRules;
use Illuminate\Http\Request;

class ContentsController extends Controller
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
    public function store(ContentsValidationRules $request)
    {
      Contents::create($request->only('modules_id', 'value'));

      return redirect('/' . $request['prefix']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentsValidationRules $request, $id)
    {
      /*Contents::where('id', $request['id'])
        ->update([
          'value' => $request['value']
        ]);*/

      $content = Contents::find($id);
      $content->value = $request['value'];
      $content->save();

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $content = Contents::find($id);
      $content->delete();

      return redirect('/' . $request['prefix']);
    }
}
