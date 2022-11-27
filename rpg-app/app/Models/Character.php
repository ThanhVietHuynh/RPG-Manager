<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable = [
        'characterName',
        'description',
        'speciality',
        'mag',
        'for',
        'agi',
        'int',
        'pv',
        'user_id'
    ];
    public function user()
    { 
        return $this->belongsTo(User::class); 
    }
    public function group()
    { 
        return $this->belongsTo(Group::class); 
    }
    public function invitations() 
    { 
        return $this->hasMany(Invitation::class); 
    }
}
