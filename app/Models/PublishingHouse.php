<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublishingHouse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'country', 'city'];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
