<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactValidationRules;
use App\Contact;
use App\Informations;
use App\Modules;
use Lang;

class ContactController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except(['create', 'store']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $contactList = Contact::orderBy('isread', 'asc')->latest()->get();
    $module = Modules::information('contact/list');

    return view('contacts.index')->with([
      'contactList' => $contactList,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $infos = Informations::first();
    $module = Modules::information('contact');
    $moduleInfosContact = Modules::information('contact/infos');

    return view('contacts.create')->with([
      'infos' => $infos,
      'infosContact' => $moduleInfosContact
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\ContactValidationRules  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ContactValidationRules $request)
  {
    Contact::create($request->only('email', 'subject', 'message'));
    return redirect()->back()->with([
      'success' => Lang::get('messages.contact.success')
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Contact  $Contact
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $Contact = Contact::find($id);
    $Contact->delete();

    return back();
  }
}
