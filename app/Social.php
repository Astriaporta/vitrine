<?php

namespace App;

class Social extends Model
{
  protected $fillable = [
      'prefix', 'name', 'link',
  ];

  protected static $links = [
    'facebook' => 'Facebook',
    'github' => 'Github',
    'google-plus-g' => 'Google plus',
    'linkedin' => 'Linkedin',
    'twitter' => 'Twitter',
    'viadeo' => 'Viadeo',
  ];

  public static function notUsed()
  {
    $present = static::all();

    $notUsed = self::$links;

    foreach ($present as  $one) {
      unset($notUsed[$one->prefix]);
    }

    return $notUsed;
  }

  public static function used()
  {
    return static::all();
  }
}
