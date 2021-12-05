<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    // mendefinisikan pengolahan tanggal
    protected $dates = ['created_at'];

    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'thumbnail', 'slug', 'user_id'];

    

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // relasi many to one (banyak post dimiliki oleh satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thumbnail(){
        // this akan mengacu kepada model post secara otomatis
        // if($this->thumbnail)
        // {
        //     return $this->thumbnail;
        // }else {
            # code...
        //     return asset('images/error-image.png');
        // }

        // short hand trick untuk if dengan 2 kondisi

        // if (!$this->thumbnail) {
        //     # code...
        //     return asset('images/error-image.png');
        // }

        // return $this->thumbnail;

        // second trick short hand

       return !$this->thumbnail ? asset('images/error-image.png') : asset('images/error-image.png');
    }
}
