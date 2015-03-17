@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-pills nav-stacked" >
                <li>
                    <center><h4>เมนู</h4></center>
                </li>
                <li >
                    <a href="/project/view">โมเดล</a>
                </li>
                <li  class="active">
                    <a href="/faculty/view">คณะ</a>
                </li>
                <li>
                   <a href="#"></a>
                </li>

            </ul>
        </div>
    </div>


<div ng-app="ViewFacultyApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="ViewFacultyController"  >
	<h2>คณะ</h2>
		<a class="btn btn-default" href="faculty" >เพิ่มคณะ</a>
<form class="form-horizontal">
<table class="table table-striped">
	<thead>
		<tr>
			<th>ชื่อคณะ(TH)</th>
			<th>ชื่อคณะ(EN)</th>


		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="faculty in faculties">
			<td>{{faculty.faculty_th}}</td>
			<td>{{faculty.faculty_en}}</td>
			<td>
                <a class="btn btn-primary" href="/faculty/edit/{{faculty.id}}">แก้ไข</a>
                <button class="btn btn-danger" ng-click="delete(faculty)">ลบ</button>
            </td>

		</tr>
	</tbody>
</table>

</form>
</div>
</div>





@stop
@section('js')
<script type="text/javascript">
var app = angular.module('ViewFacultyApp',[]);
    app.controller('ViewFacultyController',function($scope,$http) {
        console.log("ViewFacultyController Start...");


                $http({
                           url : "/faculty/view/all",
                           method:'get'

                       }).success(function(response){
                           $scope.faculties = response;
                       });

        $scope.delete = function (faculty) {

            deleteStr = "Do you want to delete this user [" + faculty.faculty_th + "]?";
            if(confirm(deleteStr)){
                $http({
                    url : "/faculty/view/delete",
                    data : faculty,
                    method : 'post'

                }).success(function(response){
                    console.log(response);
                    window.location="/faculty/view";
                });
            }

        }

           });


</script>


@stop