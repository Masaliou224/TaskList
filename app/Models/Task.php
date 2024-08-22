<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = [
        'id',
        'project_id',

        'priority',
        'title',
        'description',
    ];
    protected $appends = [
        'created',
    ];

    public function project() :  BelongsTo {
        return $this->belongsTo(Project::class);
    }

    public function getCreatedAttribute() {
        return $this->created_at->diffForHumans();
    }
}


