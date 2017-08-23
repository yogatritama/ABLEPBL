<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProcessHipotesisTutor extends Authenticatable
{
    use Notifiable;

    protected $table = 'process_hipotesis_tutor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pertanyaan', 'isian', 'status'
    ];
}
