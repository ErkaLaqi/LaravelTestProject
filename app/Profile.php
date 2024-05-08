<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];
    protected $fillable = [
        'title',
        'description',
        'url',
        'image'
    ];
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/Hul7riybXgYdIPHlTMUP4ddCJXykvheB9y3IlJWQ.jpeg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
