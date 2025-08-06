<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NewsCategory extends Model
{
  protected $fillable = ['title', 'slug'];

  public function links(): HasMany
  {
    return $this->hasMany(News::class, 'news_category_id');
  }
}
