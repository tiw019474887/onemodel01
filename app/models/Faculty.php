<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Vinelab\NeoEloquent\Eloquent\SoftDeletingTrait;

class Faculty extends NeoEloquent {

    use SoftDeletingTrait;

    protected $label = ['Faculty'];

    protected $fillable = [
        'faculty_en',
        'faculty_th'];

    public function researchers(){
        return $this->belongsToMany("Researcher","WORKINGON");
    }

    public function photos(){
        return $this->hasMany('Photo','PHOTO');
    }

    public function cover(){
        return $this->hasOne('Photo','PHOTOCOVER');
    }




}
