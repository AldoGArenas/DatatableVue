<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Auxiliar extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    protected $guard_name = 'aux';

    protected $guard = 'aux';

    protected $table = 'auxiliares';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'idUnidad', 'nombres', 'primerAp', 'segundoAp', 'email', 'telefono', 'password', 'tokenSession',
    ];

    public function fiscales()
    {
        return $this->belongsToMany('App\User', 'auxiliar_user', 'idAuxiliar', 'idFiscal');
    }
}
