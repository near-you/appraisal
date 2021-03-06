<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';

    protected $fillable = [
        'specialty',
        'college_name',
        'from',
        'to',
    ];

    public static function updateEducationData($request, $id): int
    {
        $data = $request->except(['_token', '_method']);
        return Education::query()->where('id', $id)
            ->update($data);
    }
}
