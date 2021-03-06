<?php

namespace App;

use Carbon\Carbon;

class News extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'tittle', 'resume', 'content', 'user_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function scopeFilter($query, $filters)
  {

    if (array_key_exists('month', $filters)) {
      $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
    }

    if (array_key_exists('year', $filters)) {
      $query->whereYear('created_at', $filters['year']);
    }
  }

  public static function archives()
  {
    return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
      ->groupBy('year', 'month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray();
  }
}
