<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable=[
        'name',
        'title',
        'description',
        'status'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('PostImages')
        ->singleFile();
        // $this->addMediaCollection('UserProfileImage')->singleFile();
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
