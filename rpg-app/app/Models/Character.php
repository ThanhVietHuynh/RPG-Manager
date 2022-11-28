<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable = [
        'character_name',
        'character_description',
        'speciality',
        'mag',
        'for',
        'agi',
        'int',
        'pv',
        'user_id',
        'group_id',
    ];
    public function user()
    { 
        return $this->belongsTo(User::class,'user_id','id'); 
    }
    public function group()
    { 
        return $this->belongsTo(Group::class,'group_id','id'); 
    }
    public function invitations() 
    { 
        return $this->hasMany(Invitation::class,'guest_id','id'); 
    }
}
