<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Vinelab\NeoEloquent\Eloquent\SoftDeletingTrait;

class User extends NeoEloquent {

    use SoftDeletingTrait;

    protected $label = ['User'];

    protected $fillable = [
        'titlename',
        'firstname',
        'lastname',
        'facebook_id',
        'email',
        'password'];

}
