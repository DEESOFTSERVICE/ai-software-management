<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author_name');
    }


    protected function minRead(): Attribute
{
    return Attribute::get(function () {
        // 1. Remove HTML tags from the content
        $cleanContent = strip_tags($this->full_desc);

        // 2. Count the total words
        $wordCount = Str::wordCount($cleanContent);

        // 3. Divide words by average reading speed (200 words per min)
        // ceil() ensures that even a 10-word post shows "1 min read" instead of "0 min"
        $minutes = ceil($wordCount / 200);

        return $minutes . ' min read';
    });
}
}
