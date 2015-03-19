@extends('layout')

@section('content')
    <div ng-app="UserApp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="UserController"  >
        <h2>สมัครสมาชิก</h2>

        <form class="form-horizontal" ng-submit="submitForm()">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="NameTh">Email</label>
                    <input class="form-control" rows="3"type="text" ng-model="user.email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label for="NameTh">Password</label>
                    <input class="form-control" rows="3"type="text" ng-model="user.password" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label for="titlename">คำนำหน้า</label>
                    <select class="form-control" rows="3" ng-model="user.titlename" class="form-control" >
                        <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="NameTh">ชื่อ</label>
                    <input class="form-control" rows="3"type="text" ng-model="user.firstname" placeholder="ชื่อ" >
                </div>
                <div class="form-group">
                    <label for="NameTh">นามสกุล</label>
                    <input class="form-control" rows="3"type="text" ng-model="user.lastname" placeholder="นามสกุล" >
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
    </div>


@stop


@section('js')

     <script type="text/javascript">
        var app = angular.module('UserApp',[]);
        app.controller('UserController',function($scope,$http) {
            console.log("'UserController Start...");

            $scope.user = {};

            $scope.submitForm = function(){
                console.log("submitForm Start...");
                console.log($scope.user);
                $http({
                    url : "/user/add",
                    data : $.param($scope.user),
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    method : 'post'
                }).success(function(response){
                    console.log(response);
                    window.location="/user/view";
                });
            }
            $http({
                url : "/user/id/<?php echo $userId; ?>",
                method:'get'
            }).success(function(response) {
                $scope.user = response;

            });

        })


    </script>

@stop