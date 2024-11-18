<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ad extends Model
{
    use HasFactory;
    protected $with = ["images"];
    protected $fillable = ['title',
        'description',
         'event_date',
         'address',
         'statuses_id',
         'users_id',
         'image'];
public function ticket(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
    return $this->belongsTo(Ticket::class);
}
public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
  return $this->belongsTo(User::class,"users_id")  ;
}
    public function bookmarkedByUsers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'ad_id', 'user_id');
    }
    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {

        return $this->hasMany(Images::class, 'ad_id','id');
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'users_id');
    }




}
