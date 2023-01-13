<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'thumb1', 'thumb2', 'technology_used', 'url', 'technology_id'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function technology(): BelongsTo
    {
        return $this->belongsTo(Technology::class);
    }

    public function devices(): BelongsToMany
    {
        return $this->belongsToMany(Device::class);
    }
}
