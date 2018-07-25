@extends('main')
@section('content')
<h3 class="text-center mt20">Welcome To FaresPro</h3>
<h4 class="text-center">Please Sign Up to continue</h4>
<div class="login-form-div">
  <form method="POST" action="{{ route('register') }}" id="login-form"> 
    {{ csrf_field() }}
    <div class="inputs">
      <p class="warning">
        @foreach ($errors->all() as $error)
          <span class="help-block">
              {{ $error }}
          </span>
        @endforeach
      </p>
      <div class="name-input">
        <label>NAME</label>
        <input type="text" placeholder="Enter your Name" name="name"/>
      </div>
      <div class="email-input">
        <label>EMAIL ID</label>
        <input type="text" placeholder="Enter your Email Id" name="email"/>
      </div>
      <div class="mobile-input">
        <label>MOBILE NUMBER</label>
        <input type="text" placeholder="Enter your Mobile Number" name="phone"/>
      </div>
      <div class="create-password">
        <label>CREATE PASSWORD</label>
        <input type="password" placeholder="Enter your Password" name="password"/>
      </div>
      <div class="confirm-password">
        <label>CONFIRM PASSWORD</label>
        <input type="password" placeholder="Retype your Password" name="password_confirmation"/>
      </div>
      <button class="signup btn btn-primary btn-lg">Sign Up</button>
    </div>
  </form>
</div>
<div class="gap"></div>
@endsection

@section('customStylesheet')
<style type="text/css">
.active-back {
  color: #919cb2 !important;
}
.active-back:hover {
  cursor: pointer;
  color: #286efa !important;
}
.back {
  position: absolute;
  height: 20px;
  width: 40px;
  color: #d6dae4;
  display: block;
  transition: 0.3s;
  margin-left: 20px;
  margin-top: -30px;
  font-size: 24px;
}
.shift {
  left: -330px !important;
}
.login-form-div h3 {
  position: absolute;
  margin-left: 88px;
  margin-top: 100px;
  font-size: 22px;
  font-weight: 200;
  color: #4f5c76;
}
#user-default-icon {
  position: absolute;
  margin-left: 160px;
  margin-top: 20px;
  width: 65px;
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
  height: 500px;
  background: #fff;
  box-shadow: 0px 5px 80px 0px #dadada;
  border-radius: 5px;
  //overflow: hidden;
}
.login-form-div form {
  //margin-top: 50px;
  //width: 750px;
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
.loader {
  margin-left: 22%;
  margin-top: 22%;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 5px solid #e8ebf1;
  border-top-color: #286efa;
  animation: spinner 1s infinite linear;
}
@-moz-keyframes spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes  spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
@endsection

@section('customScripts')
<script type="text/javascript">
setTimeout(function () {
  $('.email > input').focus();
}, 300);

$('.email > input').on('keydown', function (event) {
  if (event.which === 13 || event.keyCode === 13) {
    $('.email > input').blur();
    $('.next').click();
  }
});

$('.password > input').on('keydown', function (event) {
  if (event.which === 13 || event.keyCode === 13) {
    $('.login').click();
  }
});

$('.next').on('click', function (event) {
  var emailInput = $('.email > input').val();
  if (validateEmail(emailInput)) {
    event.preventDefault();
    $('.inputs').addClass('shift');
    $('.back').addClass('active-back');
    $('.email > input').css({
      'border': '1px solid #cccccc'
    });
    $('.warning').empty();
    setTimeout(function () {
      $('.password > input').focus();
    }, 400);
  } else {
    event.preventDefault();
    $('.warning').empty();
    $('.email > input').css({
      'border': '1px solid red'
    });
    $('.warning').append('Invalid Email Address');
  }
});

$('.back').on('click', function (event) {
  event.preventDefault();
  $('.inputs').removeClass('shift');
  $('.back').removeClass('active-back');
  setTimeout(function () {
    $('.email > input').focus();
  }, 300);
});

$('.login').on('click', function (event) {
  event.preventDefault();
  $('#login-form').submit();
  //$('#login-form').empty();
  //$('#login-form').append('<div class="loader"></div>');
  /*setTimeout(function () {
    location = location;
  }, 2000);*/
});

var validateEmail = function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
};
</script>
@endsection
