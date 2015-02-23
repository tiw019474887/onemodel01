<?php

class ViewProjectController extends BaseController {

    public function getIndex() {

        return View::make('projects.view');
    }
    public function getAll(){
        return Project::all();
    }
}
