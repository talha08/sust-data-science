<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='events';





    //parse created_at date and return full date
    // $id= id $date = createed-at, updated_at, others-at  .....
    public static function fullDate($id, $date){
        $event = \App\Event::findOrFail($id)->$date;
        $dt = \Carbon\Carbon::parse($event);
        return  $dt->formatLocalized('%d %B %Y');//day date month year
    }



    //parse created_at date and return full date
    public static function fullTime($id, $time){
        $event = \App\Event::findOrFail($id)->$time;
        $dt = \Carbon\Carbon::parse($event);
        return $dt->format('h:i A');

    }

}
