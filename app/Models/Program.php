<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function professions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Profession::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}
