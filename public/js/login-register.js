/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

function shakeModal(msg){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html(msg);
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

$("#login-form").on('submit', function(e) {
    $(".login-loader").show();
    e.preventDefault();
    $.post(
        $(this).attr('action'),
        {
            email: $("#login-email").val(),
            password: $("#login-password").val()
        },
        function(response) {
            location.reload();
        }
    ).fail(function(error) {
        $(".login-loader").hide();
        let msg = "";
        for(let key in error.responseJSON.errors) {
            msg = error.responseJSON.errors[key][0];
            break;
        }
        shakeModal(msg);
        refreshToken();
        //$("#login-error-alert").html(msg).show();
    })
});

$("#register-form").on('submit', function(e) {
    $(".login-loader").show();
    e.preventDefault();
    $.post(
        $(this).attr('action'),
        {
            name: $("#signup-name").val(),
            email: $("#signup-email").val(),
            phone: $("#signup-phone").val(),
            password: $("#signup-password").val(),
            password_confirmation: $("#signup-password-confirm").val()
        },
        function(response) {
            location.reload();
        }
    ).fail(function(error) {
        $(".login-loader").hide();
        let msg = "";
        for(let key in error.responseJSON.errors) {
            msg = error.responseJSON.errors[key][0];
            break;
        }
        shakeModal(msg);
        refreshToken();
        //$("#register-error-alert").html(msg).show();
    })
});

function refreshToken(){
    $.get('refresh-csrf').done(function(data){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': data
            }
        });
    });
}