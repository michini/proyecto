<?php

namespace App;

use App\Http\Requests\Request;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;

    protected $table = 'users';
    protected $fillable = [
        'username', 'email', 'password','photo'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role')->withPivot('user_id','role_id');
    }

    public function setPhotoAttribute($photo){
        $this->attributes['photo']=Carbon::now()->second.$photo->getClientOriginalName();
        $nombre = Carbon::now()->second.$photo->getClientOriginalName();

        Storage::disk('local')->put($nombre,File::get($photo));
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function setUsernameAttribute($username)
    {
        $this->attributes['username'] = Str::title($username);
    }

}
