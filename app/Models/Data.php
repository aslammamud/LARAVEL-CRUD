<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Data extends Model
{
  use FormAccessible;

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
