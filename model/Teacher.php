<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'Teachers';
    protected $primaryKey = 'TNO';

    public function thumbnails(){
        return $this -> hasOne('App\Models\Thumbnail');
    }
}
