<?php

class ProjectController extends BaseController {

    public function getIndex() {

        return View::make('projects.index');
    }

    public function  postAdd(){

        $project = Project::updateOrCreate(Input::except([]));

        $project->save();

        return $project;
    }
    public function getAll(){
        return Faculty::all();
    }

}
