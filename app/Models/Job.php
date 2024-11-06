<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'responsability',
        'category_id',
        'job_type_id',
        'user_id',
        'salary',
        'experience',
        'date_limite',
        'country',
        'city',
        'address',
        'company_location',
        'company_email',
        'company_name',
        'company_website',
        'status',
        'isFeatured',
    ];

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function applications()
    {
        return $this->hasMany(JobApplied::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
