<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'storage_id', 'category_id'];

    public function good()
    {
        return $this->belongsTo(Good::class);
    }
}
