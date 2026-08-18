<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Job;
use App\Models\User;

#[Fillable([
    'job_id',
    'user_id',
    'full_name',
    'contact_phone',
    'contact_email',
    'message',
    'location',
    'resume_path'
])]
class Applicant extends Model
{
    use HasFactory;

    public function job(): BelongsTo {
        return $this->belongsTo(Job::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
