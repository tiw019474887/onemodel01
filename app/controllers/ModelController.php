<?php

class ModelController extends BaseController {

    public function getIndex() {

        return View::make('models.index');
    }
    public function getAll(){
        return Faculty::all();
    }


}
