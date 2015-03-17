<?php

class ProjectController extends BaseController {

    public function getIndex() {

        return View::make('projects.index');
    }

    public function  postAdd(){

        if (Input::has('id')){
            /* @var $project Project */
            $project = Project::find(Input::get('id'));
            $project->fill(Input::except(['faculty']));



            $project->save();
        }else {
            $project = Project::updateOrCreate(Input::except(['faculty']));
            $project->save();

            $input_faculty = Input::get('faculty');
            $faculty =  Faculty::find($input_faculty['id']);
            //$project->faculty()->associate($faculty)->save();

            $project->saveFacultyRelation($faculty);
        }


        return $project;
    }


    public function getById($id){
        return Project::with(['faculty'])->find($id);

    }

    public  function getEditForm($id){
        return View::make("projects.editForm")->with("projectId",$id);
    }

}
