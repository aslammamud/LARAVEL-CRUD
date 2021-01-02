<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
  protected $table = 'datas';

  protected $fillable = [
      'date',
      'trade_code',
      'high',
      'low',
      'open',
      'close',
      'volume'
  ];
}
