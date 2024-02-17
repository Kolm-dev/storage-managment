<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'description', 'price', 'storage_id', 'category_id'];

    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
}
