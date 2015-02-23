<?php

class ViewFacultyController extends BaseController {

    public function getIndex() {

        return View::make('faculty.view');
    }
    public function getAll(){
        return Faculty::all();
    }


}
