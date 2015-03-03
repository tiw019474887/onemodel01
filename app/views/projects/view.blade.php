@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-pills nav-stacked" >
                <li>
                   <a>เมนู<span class="sr-only">(current)</span></a>
                </li>
                <li class="active">
                   <a href="projectview">โมเดล</a>
                </li>
                <li>
                   <a href="facultyview">คณะ</a>
                </li>
                <li>
                   <a href="#"></a>
                </li>

            </ul>
        </div>
    </div>

<div ng-app="ViewProjectApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="ViewProjectController"  >
	<h2>โมเดล</h2>
		<a class="btn btn-default" href="project" >เพิ่มโมเดล</a>
<form class="form-horizontal">
<table class="table table-striped">
	<thead>
		<tr>
			<th>ชื่อโมเดล</th>



		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="project in projects">
			<td>{{project.name_th}}</td>

			<td>
			 <a class="btn btn-primary" ui-sref="edit({ id : faculty.id})">แก้ไข</a>
             <button class="btn btn-danger" ng-click="open('lg',faculty)">ลบ</button>
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
                           url : "/show/projectview/all",
                           method:'get'

                       }).success(function(response){
                           $scope.projects = response;
                       });

           });


</script>


@stop