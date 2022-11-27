<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    protected $fillable = [
        'host_id',
        'guest_id',
        'crew_id',
    ];
    public function user()
    { 
        return $this->belongsTo(User::class); 
    }
    public function character()
    { 
        return $this->belongsTo(Character::class); 
    }
    public function group()
    { 
        return $this->belongsTo(Group::class); 
    }
}
