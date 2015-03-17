<?php

class FacultyController extends BaseController {

    public function getIndex() {

        return View::make('faculty.index');
    }

    public function  postAdd(){

        $faculty = Faculty::updateOrCreate(Input::except([]));

        $faculty->save();

        return $faculty;
    }

    public function getAll(){
        return Faculty::all();
    }
    public function getById($id){
        return Project::with(['faculty'])->find($id);

    }

    public  function getEditForm($id){
        return View::make("faculty.editForm")->with("facultyId",$id);
    }

}
