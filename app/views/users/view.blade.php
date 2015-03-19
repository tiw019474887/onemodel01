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
                <li  >
                    <a href="/faculty/view">คณะ</a>
                </li>
                <li class="active">
                   <a href="/user/view">ผู้ใช้งาน</a>
                </li>

            </ul>
        </div>
    </div>


<div ng-app="UserApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="UserController"  >
	<h2>รายชื่อสมาชิก</h2>
<form class="form-horizontal">
<table class="table table-striped">
	<thead>
		<tr>
            <th>คำนำหน้า</th>
			<th>ชื่อ</th>
			<th>Email</th>


		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="user in users">
            <td>{{user.titlename}}</td>
			<td>{{user.firstname}}</td>
			<td>{{user.email}}</td>
			<td>
                <a class="btn btn-primary" href="/user/edit/{{user.id}}">แก้ไข</a>
                <button class="btn btn-danger" ng-click="delete(user)">ลบ</button>
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
var app = angular.module('UserApp',[]);
    app.controller('UserController',function($scope,$http) {
        console.log("UserController Start...");


                $http({
                           url : "/user/view/all",
                           method:'get'

                       }).success(function(response){
                           $scope.users = response;
                       });

        $scope.delete = function (user) {

            deleteStr = "Do you want to delete this user [" + user.firstname + "]?";
            if(confirm(deleteStr)){
                $http({
                    url : "/user/view/delete",
                    data : user,
                    method : 'post'

                }).success(function(response){
                    console.log(response);
                    window.location="/user/view";
                });
            }

        }

           });


</script>


@stop