<div class="modal fade login" id="loginModal">
              <div class="modal-dialog login animated">
                  <div class="row mt20" style="background: #fff; border-radius: 6px; display: flex;">
                    <?php
                      $banner3 = Voyager::image(setting('site-ad-banners.ad_banner_3'));
                    ?>
                    <div class="col-md-7 hidden-xs hidden-sm" style="background: url('{{ $banner3 }}'); background-size: cover; background-position: center; background-repeat: no-repeat; border-top-left-radius: 6px; border-bottom-left-radius: 6px;"></div>
                    <div class="col-md-5 col-xs-12 col-sm-12">
                      <div class="modal-content">
                         <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title text-center">Login with</h4>
                        </div>
                        <div class="modal-body">  
                            <div class="box">
                                 <div class="content">
                                    <div class="social">
                                        <a id="google_login" class="circle google" href="/oauth/google">
                                            <i class="fa fa-google-plus fa-fw"></i>
                                        </a>
                                        <a id="facebook_login" class="circle facebook" href="/oauth/facebook">
                                            <i class="fa fa-facebook fa-fw"></i>
                                        </a>
                                    </div>
                                    <div class="division">
                                        <div class="line l"></div>
                                          <span>or</span>
                                        <div class="line r"></div>
                                    </div>
                                    <div class="error"></div>
                                    <div class="form loginBox">
                                        <form method="post" id="login-form" action="/login" accept-charset="UTF-8">
                                        <input id="login-email" class="form-control" type="text" placeholder="Email" name="email">
                                        <input id="login-password" class="form-control" type="password" placeholder="Password" name="password">
                                        <div class="login-loader text-center">
                                          <img src="/img/ajax-loader.gif" />
                                      </div>
                                        <input class="btn btn-default btn-login" type="submit" value="Login">
                                        </form>
                                    </div>
                                 </div>
                            </div>
                            <div class="box">
                                <div class="content registerBox" style="display:none;">
                                 <div class="form">
                                    <form method="post" id="register-form" action="/register">
                                      <input id="signup-name" class="form-control" type="text" placeholder="Name" name="name">
                                      <input id="signup-email" class="form-control" type="text" placeholder="Email" name="email">
                                      <input id="signup-phone" class="form-control" type="text" placeholder="Phone" name="phone">
                                      <input id="signup-password" class="form-control" type="password" placeholder="Password" name="password">
                                      <input id="signup-password-confirm" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                      <div class="login-loader text-center">
                                          <img src="/img/ajax-loader.gif" />
                                      </div>
                                      <input class="btn btn-default btn-register" type="submit" value="Create account">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="forgot login-footer">
                                <a href="/password/reset">Forgot Password?</a><br>
                                <span>Looking to 
                                     <a href="javascript: showRegisterForm();">create an account</a>
                                ?</span>
                            </div>
                            <div class="forgot register-footer" style="display:none">
                                 <span>Already have an account?</span>
                                 <a href="javascript: showLoginForm();">Login</a>
                            </div>
                        </div>        
                      </div>
                    </div>
                  </div>
              </div>
          </div>