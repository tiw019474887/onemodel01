@extends('layout')

@section('content')
<script type="text/ng-template" id="customTemplate.html">
  <a>
      <img ng-src="http://upload.wikimedia.org/wikipedia/commons/thumb/{{faculty.faculty_th}}" width="16">
      <span bind-html-unsafe="match.label | typeaheadHighlight:query"></span>
  </a>
</script>


<div ng-app="ProjectApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="ProjectController"  >
	<h2>เพิ่มโมเดล</h2>
<form class="form-horizontal" ng-submit="submitForm()">
    <div class="col-lg-6">

               <div class='form-group' ng-controller="TypeaheadCtrl">

                   <h4>Static arrays</h4>
                   <pre>Model: {{selected | json}}</pre>
                   <input type="text" ng-model="ProjectApp" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control">
               </div>


        <div class="form-group">
            <label for="area_operation">พื้นที่</label>
            <select class="form-control" rows="3" ng-model="project.area_operation" class="form-control" id="area_operation" placeholder="พื้นที่">
              <option>อำเภอเมืองพะเยา</option>
              <option>อำเภอจุน</option>
              <option>อำเภอเชียงคำ</option>
              <option>อำเภอเชียงม่วน</option>
              <option>อำเภอดอกคำใต้</option>
              <option>อำเภอปง</option>
              <option>อำเภอภูกามยาว</option>
              <option>อำเภอภูซาง</option>
              <option>อำเภอแม่ใจ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="objectives">วัตถุประสงค์</label>
            <textarea class="form-control" rows="3"type="text" ng-model="project.objecttives" class="form-control" id="objectives" placeholder="วัตถุประสงค์"></textarea>
        </div>
        <div class="form-group">
            <label for="B">วิธีดำเนินงาน</label>
            <textarea class="form-control" rows="3"type="text" class="form-control" ng-model="project.procedures" id="procedures" placeholder="วิธีการดำเนินงาน"></textarea>
	    </div>
        <div class="form-group">
            <label for="result_area">ผลกระทบกับชุมชนและพื้นที่</label>
            <textarea class="form-control" rows="3"type="text" class="form-control" ng-model="project.result_area" id="result_area" placeholder="ผลกระทบกับชุมชนและพื้นที่"></textarea>
        </div>
        <div class="form-group">
            <label for="result_researcher">ผลกระทบกับนักวิจัย</label>
            <textarea class="form-control" rows="3"type="text" class="form-control" ng-model="project.result_researcher" id="result_researcher" placeholder="ผลกระทบกับนักวิจัย"></textarea>
        </div>
        <div class="form-group">
            <label for="E">ผลกระทบกับนิสิต</label>
            <textarea class="form-control" rows="3"type="text" class="form-control" ng-model="project.result_student" id="result_student" placeholder="ผลกระทบกับนิสิต"></textarea>
        </div>
        <div class="form-group">
            <label for="F">แสดงความขอบคุณ</label>
            <textarea class="form-control" rows="3"type="text" class="form-control" ng-model="project.acknowledgement" id="acknowledgement" placeholder="แสดงความขอบคุณ"></textarea>
        </div>
        <div class="form-group">
            <label for="G">รูปภาพ</label>
            <input type="file" id="G">
        </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
</form>
</div>
<br>

@stop


@section('js')

<script type="text/javascript">
    var app = angular.module('ProjectApp',[]);
    app.controller('ProjectController',function($scope,$http) {
        console.log("ProjectController Start...");

        $scope.project = {};

        $scope.submitForm = function(){
            console.log("submitForm Start...");
            console.log($scope.project);
            $http({
                url : "/show/project/add",
                data : $.param($scope.project),
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                method : 'post'
            }).success(function(response){
                console.log(response);
            });
        }
        $http({
                        url : "/show/projects/all",
                        method:'get'
                        }).success(function(response){
                        $scope.faculties = response;
                        });
    });


</script>

@stop