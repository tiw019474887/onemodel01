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

    public function getView($id){
        $id = (int) $id;
        $faculty = Faculty::with([])->find($id);
        if ($faculty){
            return $this->ok($faculty);
        }else {
            return $this->error(null,"Faculty id:$id is invalid");
        }
    }
}
