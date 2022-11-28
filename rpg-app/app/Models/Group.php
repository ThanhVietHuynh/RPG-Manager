<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_name',
        'group_description',
        'number_place',
        'author_id',
    ];
    public function user()
    { 
        return $this->belongsTo(User::class,'author_id','id'); 
    }
    public function characters() 
    { 
        return $this->hasMany(Character::class,'group_id','id'); 
    }
    public function invitations() 
    { 
        return $this->hasMany(Invitation::class,'crew_id','id'); 
    }

}
