<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'students';
    protected $primaryKey = 'snumber';

    public function stumessage(){
        return $this-> hasOne('App\Models\Stumessage');
    }
}
