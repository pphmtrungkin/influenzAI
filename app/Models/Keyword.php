<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Keyword extends Model
{
    use HasFactory;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class);
    }
}
