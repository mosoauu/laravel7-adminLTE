<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $table = "_products";
public function Products()
{
    return $this->belongTo($table);
}
}
