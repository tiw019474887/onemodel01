<?php

class ViewFacultyController extends BaseController {

    public function getIndex() {

        return View::make('faculty.view');
    }

    public function getAll(){
        return Faculty::all();
    }

    public function postDelete(){
        if (Input::has('id')){
            $id = (int) Input::get('id');
            $faculty = Faculty::find($id);
            $faculty->delete();

        }
    }

}
