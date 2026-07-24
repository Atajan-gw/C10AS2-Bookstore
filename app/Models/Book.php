<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'category_id',
        'author_id',
        'publisher_id',
        'language_id',
        'year_id',
        'page_number',
        'code',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
