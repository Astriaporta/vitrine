<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsValidationRules;
use App\News;
use App\Modules;

class NewsController extends Controller
{
  public $menu;

  public function __construct()
  {
    $this->middleware('auth')->except(['index', 'show']);

    $this->menu = Modules::information('news');
  }

  public function index()
  {
    $news = News::latest()
      ->filter(request(['month', 'year']))
      ->get();

    return view('news.index')->with([
      'news' => $news,
      'tittle' => 'News'
    ]);
  }

  public function create()
  {
    return view('news.create')->with(['tittle' => 'News']);
  }

  public function store(NewsValidationRules $request)
  {
    auth()->user()->publish(
      new News([
        'tittle' => $request['tittle'],
        'resume' => $request['resume'],
        'content' => $request['content']
      ])
    );

    return redirect('/news');
  }

  public function show($id)
  {
    $new = News::find($id);
    return view('news.show')->with([
      'new' => $new,
      'tittle' => 'News'
    ]);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $new = News::find($id);
    return view('news.edit')->with([
      'new' => $new,
      'tittle' => 'News'
    ]);
  }

  public function update(NewsValidationRules $request, $id)
  {
    $new = News::find($id);
    $new->tittle = $request['tittle'];
    $new->resume = $request['resume'];
    $new->content = $request['content'];
    $new->save();

    return redirect('/news/' . $id);
  }

  public function destroy($id)
  {
    $content = News::find($id);
    $content->delete();

    return back();
  }
}
