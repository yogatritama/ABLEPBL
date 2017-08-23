<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MoreInformationTutor extends Authenticatable
{
    use Notifiable;

    protected $table = 'more_information_tutor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pertanyaan', 'isian', 'status'
    ];
}
