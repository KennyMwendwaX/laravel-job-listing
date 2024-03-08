<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'location',
        'email',
        'salary',
        'tags',
        'website',
        'schedule',
        'status',
        'description',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $searchTerm = '%' . strtolower(request('search')) . '%';
            $query->where(function ($query) use ($searchTerm) {
                $query->whereRaw('LOWER(title) LIKE ?', [$searchTerm])
                    ->orWhereRaw('LOWER(tags) LIKE ?', [$searchTerm]);
            });
        }

        if ($filters['schedule'] ?? false) {
            $query->where('schedule', 'like', '%' . request('schedule') . '%');
        }

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
    }
}
