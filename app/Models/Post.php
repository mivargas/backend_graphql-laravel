<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected  $fillable = ["author_id", "title", "content"];

    public function author(): BelongsTo {
        return $this->belongsTo(user::class);
    }


    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }


}
