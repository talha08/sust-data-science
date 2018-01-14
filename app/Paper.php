<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $table='paper';

    /**
     * For User and Paper Many To Many RelationShip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(){
        return $this->belongsToMany('App\User','paper_user','paper_id','user_id');
    }


    public static  function isValidURL($url)
    {
        return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*
        (:[0-9]+)?(/.*)?$|i', $url);
    }
}
