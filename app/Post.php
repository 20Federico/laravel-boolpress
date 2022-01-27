<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'title', 'description', 'body', 'publish_date', 'user_id', 'category_id', 'tag_id' 
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function category() {
    return $this->belongsTo('App\Category');
  }

  public function tags() {
    return $this->belongsToMany('App\Tag');
  }
}
