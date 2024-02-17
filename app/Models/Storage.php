<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'description', 'price', 'storage_id', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
