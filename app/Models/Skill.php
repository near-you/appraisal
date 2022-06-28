<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $fillable = [
        'technical_skills',
        'technical_skills_desc',
        'soft_skills',
        'soft_skills_desc',
    ];

    public static function updateSkillData($request, $id): int
    {
        $data = $request->except(['_token', '_method']);
        return Skill::query()->where('id', $id)
            ->update($data);
    }
}
