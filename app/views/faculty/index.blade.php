@extends('layout')

@section('content')

<div ng-app="FacultyApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="FacultyController"  >
	<h2>เพิ่มคณะ</h2>
<form class="form-horizontal" ng-submit="submitForm()">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="NameTh">ชื่อคณะ(TH)</label>
            <input class="form-control" rows="3"type="text" ng-model="faculty.faculty_th" placeholder="ชื่อคณะ(TH)" required="">
        </div>
        <div class="form-group">
            <label for="NameEn">ชื่อคณะ(EN)</label>
            <input class="form-control" rows="3"type="text" ng-model="faculty.faculty_en" placeholder="ชื่อคณะ(EN)">
        </div>
            <button type="submit" class="btn btn-default">ตกลง</button>
        </div>
</form>
</div>
</div>


@stop


@section('js')

<script type="text/javascript">
var app = angular.module('FacultyApp',[]);
    app.controller('FacultyController',function($scope,$http) {
        console.log("'FacultyController Start...");

        $scope.faculty = {};

        $scope.submitForm = function(){
                   console.log("submitForm Start...");
                   console.log($scope.faculty);
                   $http({
                       url : "/show/faculty/add",
                       data : $.param($scope.faculty),
                       headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                       method : 'post'
                   }).success(function(response){
                       console.log(response);
                   });
               }

           })


</script>

@stop