<?php

class FacultyController extends BaseController {

    public function getIndex() {

        return View::make('faculty.index');
    }

    public function  postAdd(){
        if (Input::has('id')) {
            $faculty = Faculty::find(Input::get('id'));
            $faculty->fill(Input::all());
            $faculty->save();
        }
        else {
            $input_faculty = Faculty::updateOrCreate(Input::except([]));
            $faculty = Faculty::find($input_faculty['id']);

            $faculty->save();
        }

        return $faculty;
    }

    public function getAll(){
        return Faculty::all();
    }
    public function getById($id){
        return Faculty::find($id);

    }

    public  function getEditForm($id){
        return View::make("faculty.editForm")->with("facultyId",$id);
    }

}
