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

<div ng-app="ViewProjectApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="ViewProjectController"  >
	<h2>โมเดล</h2>
		<a class="btn btn-default" href="/project" >เพิ่มโมเดล</a>
<form class="form-horizontal">
<table class="table table-striped">
	<thead>
		<tr>
			<th>ชื่อโมเดล</th>
            <th>ชื่อคณะ</th>



		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="project in projects">
			<td>{{project.name_th}} </td>
            <td>{{project.faculty.faculty_th}}</td>

			<td>
			 <a class="btn btn-primary" href="/project/edit/{{project.id}}">แก้ไข</a>
             <button class="btn btn-danger" ng-click="delete(project)">ลบ</button>
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
var app = angular.module('ViewProjectApp',[]);
    app.controller('ViewProjectController',function($scope,$http) {
        console.log("ViewProjectController Start...");


                $http({
                           url : "/project/view/all",
                           method:'get'

                       }).success(function(response){
                           $scope.projects = response;
                       });

        $scope.delete = function (project) {

            deleteStr = "Do you want to delete this user [" + project.name_th + "]?";
            if(confirm(deleteStr)){
                $http({
                    url : "/project/view/delete",
                    data : project,
                    method : 'post'

                }).success(function(response){
                    console.log(response);
                    window.location="/project/view";
                });
            }

        }

           });


</script>


@stop