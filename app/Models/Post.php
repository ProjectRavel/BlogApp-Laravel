<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'title', 'author_id', 'body'];

    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters) : void
    {
        $query->when(isset($filters['search']) ? $filters['search'] : false, fn($query, $search)=>
            $query->where('title', 'LIKE', '%' . request('search') . '%')
        );

        $query->when(
            isset($filters['category']) ? $filters['category'] : false,
            fn($query, $category) =>
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );  
    }
}
