<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $table = 'social_networks';

    protected $fillable = [
        'social_net_name',
        'social_net_link',
    ];

    public static function updateSocialNetworkData($request, $id): int
    {
        $data = $request->except(['_token', '_method']);
        return SocialNetwork::query()->where('id', $id)
            ->update($data);
    }
}
