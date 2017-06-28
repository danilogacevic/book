<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';
    protected $uploads = '/images/test/';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['file'];


    public function getFileAttribute($photo){




        return $this->uploads . $photo;



    }

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
