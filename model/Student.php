<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'students';
    protected $primaryKey = 'SNUMBER';

    public function stumessages(){
        return $this-> hasOne('App\Models\Stumessage');
    }
}
