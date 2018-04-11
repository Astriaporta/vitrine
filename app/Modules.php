<?php

namespace App;

class Modules extends Model
{
  protected $fillable = [
      'id', 'name', 'resume',
  ];

  public static function information($name)
  {
    return static::select()->where('prefix', $name)->first();
  }

  public static function menu()
  {
    return static::select()->where('position', '!=', null)->get();
  }

  public static function otherOption()
  {
    return static::select()->where('position', '=', null)->get();
  }
}
