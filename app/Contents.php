<?php

namespace App;

class Contents extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'value', 'modules_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function scopeFilter($query, $filters)
  {
    if ($menuId = $filters['modules_id']) {
      $query->where('modules_id', $menuId);
    }
  }
}
