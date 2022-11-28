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
        return $this->belongsTo(User::class,'host_id','id'); 
    }
    public function character()
    { 
        return $this->belongsTo(Character::class,'guest_id','id'); 
    }
    public function group()
    { 
        return $this->belongsTo(Group::class,'crew_id','id'); 
    }
}
