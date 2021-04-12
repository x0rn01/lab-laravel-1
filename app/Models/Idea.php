<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function getStatusClasses()
    {
        $allStatuses = [
            'Open' => 'bg-gray-200',
            'Considering' => 'bg-purple-400 text-white',
            'In Progress' => 'bg-yellow-400 text-white',
            'Implemented' => 'bg-green-400 text-white',
            'Closed' => 'bg-red-400 text-white',
        ];

        return $allStatuses[$this->status->name];
    }
}
