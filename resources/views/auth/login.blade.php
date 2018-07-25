@extends('main')
@section('content')
<h3 class="text-center mt20">Welcome To FaresPro</h3>
<h4 class="text-center">Please Login to continue</h4>
<div class="login-form-div">
  <form method="POST" action="{{ route('login') }}" id="login-form2" style="margin-top: 50px;"> 
    {{ csrf_field() }}
    <div class="back"> <span><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></span></div>
    <img src="/img/user-default.png" id="user-default-icon"/>
    <h3>Enter your credentials</h3>
    <div class="inputs"> 
      <div class="email">
        <input class="first" type="text" placeholder="Your Email" name="email"/>
        <button class="next btn btn-primary btn-lg">Next</button>
        <p class="warning">
            @if ($errors->has('email'))
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block">
                    {{ $errors->first('password') }}
                </span>
            @endif
        </p>
        <a href="/password/reset" style="display: block; margin-left: 75px; margin-top: 12px;">Forgot Password?</a>
      </div>
      <div class="password">
        <input class="second" type="password" placeholder="Enter Password" name="password"/>
        <button class="loginb btn btn-primary btn-lg">Log in</button>
      </div>
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
  width: 250px;
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
  margin-top: 30px;
  width: 262px;
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
  height: 400px;
  background: #fff;
  box-shadow: 0px 5px 80px 0px #dadada;
  border-radius: 5px;
  overflow: hidden;
}
.login-form-div form {
  margin-top: 50px;
  width: 750px;
}
.login-form-div form .inputs {
  position: relative;
  left: 65px;
  top: 150px;
  transition: 0.3s;
}
.login-form-div form .inputs .email {
  float: left;
  position: relative;
  width: 350px;
}
.login-form-div form .inputs .password {
  float: right;
  position: relative;
  width: 350px;
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

$('.loginb').on('click', function (event) {
  event.preventDefault();
  $('#login-form2').submit();
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
