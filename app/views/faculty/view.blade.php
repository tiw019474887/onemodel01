@extends('layout')

@section('content')
<div ng-app="ViewFacultyApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="ViewFacultyController"  >
	<h2>คณะ</h2>
		<a class="btn btn-default" href="faculty" >เพิ่มโมเดล</a>
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
var app = angular.module('ViewFacultyApp',[]);
    app.controller('ViewFacultyController',function($scope,$http) {
        console.log("ViewFacultyController Start...");


                $http({
                           url : "/show/facultyview/all",
                           method:'get'

                       }).success(function(response){
                           $scope.faculties = response;
                       });

           });


</script>


@stop