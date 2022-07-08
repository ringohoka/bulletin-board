<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'subjects';
    protected $primaryKey = 'id';

    public function stumessage()
    {
        return $this->hasOne('App\Models\Stumessage');
    }
}
