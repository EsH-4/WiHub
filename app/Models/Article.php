<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    /**
     * Default eager loading (biar hemat query N+1 problem)
     */
    protected $with = ['user'];

    /**
     * Article belongs to a user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}