<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $table = 'work_experiences';

    protected $fillable = [
        'job_title',
        'job_subtitle',
        'from',
        'to',
        'job_description',
    ];

    public static function updateWorkExperianceData($request, $id): int
    {
        $data = $request->except(['_token', '_method']);
        return WorkExperience::query()->where('id', $id)
            ->update($data);
    }
}
