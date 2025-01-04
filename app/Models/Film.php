<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_film';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'judul',
        'sinopsis',
        'poster',
        'direktur',
        'tahun_rilis',
    ];

    /**
     * Get the comments for the film.
     */
    public function comments()
    {
        return $this->hasMany(Komentar::class, 'film_id', 'id');
    }
}
