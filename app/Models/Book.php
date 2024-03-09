<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'pdf_file'];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'image' => 'string',
        'pdf_file' => 'string',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}