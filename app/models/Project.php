<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Vinelab\NeoEloquent\Eloquent\SoftDeletingTrait;

class Project extends NeoEloquent {

    use SoftDeletingTrait;

    protected $label = ['Project'];

    protected $fillable = [
        'name_en',
        'name_th',
        'area_operation',
        'objectives',
        'procedures',
        'result_area',
        'result_researcher',
        'result_student',
        'acknowledgement'];

    public function researchers(){
        return $this->belongsToMany("Researcher","WORKINGON");
    }

    public function photos(){
        return $this->hasMany('Photo','PHOTO');
    }

    public function cover(){
        return $this->hasOne('Photo','PHOTOCOVER');
    }

    public function files(){
        return $this->hasMany('MediaFile','FILE');
    }

    public function faculty(){
        return $this->belongsTo('Faculty','HAS');
    }


}
