<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'title', 'author_id', 'body'];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}