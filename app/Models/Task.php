<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Import correct
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model // Utilise bien Model ici
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'completed', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
