<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('tags', 'like', '%' . request('search') . '%');
        }

        if ($filters['schedule'] ?? false) {
            $query->where('schedule', 'like', '%' . request('schedule') . '%');
        }

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
    }
}
