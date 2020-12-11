<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Post extends Model
{
    use HasFactory;
    use QueryCacheable;

    /**
     * @var int
     */
    protected $cacheFor = 300;

    protected $perPage = 12;

    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var string[]
     */
    protected $casts = [
        'published_at'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'published_at',
    ];

    /**
     * Relationship with table users
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
