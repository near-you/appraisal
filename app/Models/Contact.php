<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'email',
        'phone_number',
        'address'
    ];

    public static function updateContactData($request, $id): int
    {
        $data = $request->except(['_token', '_method']);
        return Contact::query()->where('id', $id)
            ->update($data);
    }
}
