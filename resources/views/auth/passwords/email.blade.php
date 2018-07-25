@extends('main')
@section('content')
<h3 class="text-center mt20">Welcome To FaresPro</h3>
<h4 class="text-center">Reset Password</h4>
<div class="login-form-div">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
  <form method="POST" action="{{ route('password.email') }}"> 
    {{ csrf_field() }}
    <div class="inputs">
      <p class="warning">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </p>
      <div class="email-input">
        <label>EMAIL ID</label>
        <input type="text" placeholder="Enter your Email Id" name="email" value="{{ old('email') }}" required/>
      </div>
      <button class="signup btn btn-primary btn-lg">Send Password Reset Link</button>
    </div>
  </form>
</div>
<div class="gap"></div>
@endsection

@section('customStylesheet')
<style type="text/css">
.login-form-div h3 {
  position: absolute;
  margin-left: 88px;
  margin-top: 100px;
  font-size: 22px;
  font-weight: 200;
  color: #4f5c76;
}
input {
  width: 300px;
  height: 35px;
  border-radius: 3px;
  border: 1px solid #ccc;
  font-size: 14px;
  padding-left: 10px;
  transition: 0.3s;
}
input::-webkit-input-placeholder {
  font-size: 14px;
}
input:focus {
  border: 1px solid #286efa !important;
  outline-width: 0;
}
button {
  margin-top: 10px;
  width: 300px;
  height: 40px;
  background: #286efa;
  color: #fff;
  font-size: 14px;
  border: 1px solid #286efa;
  border-radius: 3px;
}
button:hover {
  background: #3c82ff;
  cursor: pointer;
}
.login-form-div {
  position: relative;
  margin: 0 auto;
  margin-top: 30px;
  width: 400px;
  height: 225px;
  background: #fff;
  box-shadow: 0px 5px 80px 0px #dadada;
  border-radius: 5px;
  //overflow: hidden;
}
.login-form-div form {
  /*margin-top: 50px;
  width: 750px;*/
}
.login-form-div form .inputs {
  position: relative;
  left: 50px;
  top: 30px;
  transition: 0.3s;
}
.login-form-div form .inputs > div {
  float: left;
  position: relative;
  width: 350px;
  margin-bottom: 10px;
}
.inputs label {
  font-weight: 700;
}
.login-form-div .warning .help-block {
  color: #f00;
  text-align: center;
  font-size: 15px;
  margin-top: 30px;
  width: 262px;
}
</style>
@endsection
