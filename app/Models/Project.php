<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'project_number',
        'name',
        'description',
        'start_date',
        'project_leader_id',
        'deputy_leader_id',
    ];

    /**
     * Get the project leader (User).
     *
     * @return BelongsTo
     */
    public function projectLeader()
    {
        return $this->belongsTo(User::class, 'project_leader_id');
    }

    /**
     * Get the deputy project leader (User).
     *
     * @return BelongsTo
     */
    public function deputyLeader()
    {
        return $this->belongsTo(User::class, 'deputy_leader_id');
    }
}
