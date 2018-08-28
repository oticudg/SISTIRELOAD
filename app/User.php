<?php
namespace Sisti;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password','type',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function indexes(){
        return $this->hasMany(Index::class);
    }

    /**
     * Obtener los roles que posee el usuario.
     */
    public function roles()
    {
        // pertenece a muchas
        return $this->belongsToMany(Sisti\Permisologia\Role::class);
    }

    /**
     * Obtener los permisos que posee el usuario.
     */
    public function permissions()
    {
        return $this->belongsToMany(Sisti\Permisologia\Permission::class);
    } 
}
