<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table ='profile';

    //user table relation
    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public static  $platform= [
        'Php'=>'Php',
        'Android'=>'Android',
        'Laravel'=>'Laravel',
        'Java'=>'Java',
        'Python'=>'Python',
        'Ruby on Rails'=>'Ruby on Rails',
        'C & C++'=>'C & C++',
        'NodeJs'=>'NodeJs',
        'Sails'=>'Sails',
        'Express'=>'Express',
        'Spring'=>'Spring',
        'Jquery'=>'Jquery',
        'JavaScript'=>'JavaScript',
    ];
}
