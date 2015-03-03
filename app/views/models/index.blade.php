@extends('layout2')

@section('content')



<div data-role="page" id="page1">

  <div data-role="content">

    <div data-role="fieldcontain">
      <p>
        <label for="textinput">Username :</label>
        <input  class="form-control" type="text" name="textinput" id="textinput" value=""  />
      </p>

      </p>
    </div>
  </div>
  <div data-role="fieldcontain">
    <label for="passwordinput">Password:</label>
    <input  class="form-control" type="password" name="passwordinput" id="passwordinput" value=""  />

  </div>
  <p id="a"></p>
  <div data-role="footer">
    <button type="submit" class="btn btn-default" onClick = "Login()" >Sign in</button>









<div data-role="page" id= "page2">
  <div data-role="header">
   <h1>Profile Me</h1>
  </div>
</div>

          <p id="LoginN"></p>
          <p id="StudentC"></p>
          <p id="CitizenID"></p>
          <p id="FacultyName"></p>
          <p id="ProgramName"></p>


@stop


@section('js')

<script src="/thirdparty/login/login.js"></script>
<script src="/thirdparty/login/encode.js"></script>

@stop