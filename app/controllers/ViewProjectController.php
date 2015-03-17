<?php

class ViewProjectController extends BaseController
{

    public function getIndex()
    {

        return View::make('projects.view');
    }

    public function getAll()
    {
        return Project::with(['faculty'])->get();
    }

    public function postDelete()
    {
        if (Input::has('id')) {
            $id = (int)Input::get('id');
            $project = Project::find($id);
            $project->delete();

        }
    }
}