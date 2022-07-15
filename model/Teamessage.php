<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teamessage extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'teamessages';
    protected $primaryKey = 'id';

    public function stumessage(){
        return $this -> belongsTo('App\Models\Stumessage');
    }
}
