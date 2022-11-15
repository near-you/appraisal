<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'first_name',
        'last_name',
        'job_title',
        'description',
        'img'
    ];

    public static function imgName($files): string
    {
        return Auth::id() . "_" . time() . "." . $files->getClientOriginalExtension();
    }

    public static function updateProfile(int $id, $request): int
    {
        $data = $request->except(['_token', '_method']);
        if ($files = $request->file('img')) {
            self::imgDestroy($id);
            $imgName = Profile::imgName($files);
            $data['img']->move(Storage::path('images/') . 'origin/', $imgName);
            $thumbnail = Image::make(Storage::path('images/') . 'origin/' . $imgName);
            $thumbnail->fit(128, 128);
            $thumbnail->save(Storage::path('images/') . 'thumbnail/' . $imgName);
            $data['img'] = $imgName;
        }

        return Profile::query()->where('id', $id)->update($data);
    }

    public static function imgDestroy(int $id)
    {
        if(Profile::query()->find($id)->img) {
            if (file_exists(public_path('images/') . 'origin/' . Profile::query()->find($id)->img)) {
                unlink(public_path('images/') . 'origin/' . Profile::query()->find($id)->img);
            }
            if (file_exists(public_path('images/') . 'thumbnail/' . Profile::query()->find($id)->img)) {
                unlink(public_path('images/') . 'thumbnail/' . Profile::query()->find($id)->img);
            }
        }
    }

    public static function profileDestroy(int $id)
    {
        self::imgDestroy($id);
        Profile::destroy($id);
    }
}
