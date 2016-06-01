<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table='projects';


    /**
     * For Project and User Many to Many Relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(){
        return $this->belongsToMany('App\User','project_user','project_id','user_id');
    }



    //parse created_at date and return full date
    // $id= id $date = createed-at, updated_at, others-at  .....
    public static function fullDate($id, $date){
        $event = \App\Project::findOrFail($id)->$date;
        $dt = \Carbon\Carbon::parse($event);
        return  $dt->formatLocalized('%d %B %Y');//day date month year
    }


}
