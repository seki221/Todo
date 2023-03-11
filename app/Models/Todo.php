<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Model\User;

class Todo extends Model
{
    use HasFactory;



protected $fillable = ['id', 'created_at','content', ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}