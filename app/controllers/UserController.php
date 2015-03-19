<?php

class UserController extends BaseController
{

    public function getIndex()
    {

        return View::make('users.index');

    }
    public function getIndexs()
    {

        return View::make('users.view');

    }

    public function getAll(){
        return User::all();
    }

    public function  postAdd(){
        if (Input::has('id')) {
            $user = User::find(Input::get('id'));
            $user->fill(Input::all());
            $user->save();
        }
        else {
            $input_user = User::updateOrCreate(Input::except([]));
            $user = User::find($input_user['id']);

            $user->save();
        }


    }
    public function postDelete(){
        if (Input::has('id')){
            $id = (int) Input::get('id');
            $user = User::find($id);
            $user->delete();

        }
    }
    public function getById($id){
        return User::find($id);

    }

    public  function getEditForm($id){
        return View::make("users.editFrom")->with("userId",$id);
    }

}




