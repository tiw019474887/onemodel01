@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-pills nav-stacked" >
                <li>
                    <center><h4>เมนู</h4></center>
                </li>
                <li class="active">
                    <a href="/project/view">โมเดล</a>
                </li>
                <li>
                    <a href="/faculty/view">คณะ</a>
                </li>
                <li>
                    <a href="/user/view">ผู้ใช้งาน</a>
                </li>

            </ul>
        </div>
    </div>



<div ng-app="ProjectApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="ProjectController"  >
	<h2>เพิ่มโมเดล</h2>

<form class="form-horizontal" ng-submit="submitForm()">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="area_operation">คณะ</label>
            <select ng-options="faculty as faculty.faculty_th for faculty in faculties" class="form-control" ng-model="project.faculty" class="form-control" id="faculty" >

            </select>
        </div>
        <div class="form-group">
                    <label for="NameTh">ชื่อโมเดล</label>
                    <input class="form-control" rows="3"type="text" ng-model="project.name_th" placeholder="ชื่อโมเดล" required="">
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
            <textarea class="form-control" rows="3"type="text" ng-model="project.objectives" class="form-control" id="objectives" placeholder="วัตถุประสงค์"></textarea>
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
        $scope.projects=[];
        $scope.project = {};

        $scope.submitForm = function(){
            console.log("submitForm Start...");
            console.log($scope.project);
            $http({
                url : "/project/add",
                data : $.param($scope.project),
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                method : 'post'
            }).success(function(response){
                console.log(response);
                window.location="/project/view";
            });
        }
        $http({
            url : "/faculty/view/all",
            method:'get'
            }).success(function(response){
            $scope.faculties = response;

            $http({
                url : "/project/id/<?php echo $projectId; ?>",
                method:'get'
            }).success(function(response){
                $scope.project = response;

                var index
                $scope.faculties.forEach(function(el,idx){
                    console.log(el.id == $scope.project.faculty.id);
                    if (el.id == $scope.project.faculty.id){
                        index = idx;
                    }
                })

                console.log(index);

                $scope.project.faculty = $scope.faculties[index];

            });

        });


    });


</script>

@stop