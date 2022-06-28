<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobbie extends Model
{
    use HasFactory;

    protected $table = 'hobbies';

    protected $fillable = [
        'hobbies_title',
    ];

    public static function updateHobbiesData($request, $id): int
    {
        $data = $request->except(['_token', '_method']);
        return Hobbie::query()->where('id', $id)
            ->update($data);
    }
}
