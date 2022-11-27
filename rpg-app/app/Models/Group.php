<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'groupName',
        'groupDescription',
        'numberOfPlace',
        'author_id',
    ];
    public function user()
    { 
        return $this->belongsTo(User::class); 
    }
    public function characters() 
    { 
        return $this->hasMany(Character::class); 
    }
    public function invitations() 
    { 
        return $this->hasMany(Invitation::class); 
    }

}
