<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 
        'occupation', 
        'avatar',
        'slug',
    ];

    public function news(): HasMany
    {
        return $this->hasMany(ArticleNews::class);
    }
}
