<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from admin.pixelstrap.com/cuba/theme/forget-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:50:49 GMT -->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
      <meta name="author" content="pixelstrap">
      <link rel="icon" href="{{asset('public/assets/images/favicon.png')}}" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}" type="image/x-icon">
      <title>850TH</title>
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome.css')}}">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/icofont.css')}}">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/themify.css')}}')}}">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/flag-icon.css')}}">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/feather-icon.css')}}">
      <!-- Plugins css start-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/scrollbar.css')}}">
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/bootstrap.css')}}">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
      <link id="color" rel="stylesheet" href="{{asset('public/assets/css/color-1.css')}}" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/responsive.css')}}">
   </head>
   <body>
      <!-- tap on top starts-->
      <div class="tap-top"><i data-feather="chevrons-up"></i></div>
      <!-- tap on tap ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper">
         <div class="container-fluid p-0">
            <div class="row">
               <div class="col-12">
                  <div class="login-card">
                     <div>
                        <div><a class="logo" href=""><img class="img-fluid for-light" src="{{asset('public/assets/images/logo/login.png')}}"  style="height:65px;"alt="looginpage"></a></div>
                        <div class="login-main">
                            
                           <form class="theme-form "  method="post" action="{{url('user/forget_action')}}">
                               @csrf
                                  @if (session('message1'))
               <div class="alert alert-success mb-2" id="hi">
              You have e-mailed your password
               </div>
               @endif
               @if (session('message2'))
               <div class="alert alert-success mb-2" id="hi">
              Something wrong Try again
               </div>
               @endif

                
               
                              <h4>Reset Your Password</h4>
                              <div class="form-group">
                                 <label class="col-form-label">Email Address</label>
                                 <input class="form-control" required  name="email" type="email" placeholder="Test@gmail.com">
                                    @error('email')
                      <span class="text-danger">
                      {{$message}}
                      </span>
                    @enderror
                    
                      @if (session('message'))
              <span class="text-danger">
                     Email does not exist try again!!
                      </span>
               @endif
                              </div>
                              <div class="form-group mb-0">
                                 <button class="btn btn-primary btn-block w-100" type="submit">Reset </button>
                              </div>
                              <p class="mt-4 mb-0 text-center">Already have an password?<a class="ms-2" href="{{url('/user/login')}}">Sign in</a></p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- latest jquery-->
      <script src="{{asset('public/assets/js/jquery-3.5.1.min.js')}}"></script>
      <!-- Bootstrap js-->
      <script src="{{asset('public/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <!-- feather icon js-->
      <script src="{{asset('public/assets/js/icons/feather-icon/feather.min.js')}}"></script>
      <script src="{{asset('public/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
      <!-- scrollbar js-->
      <script src="{{asset('public/assets/js/scrollbar/simplebar.js')}}"></script>
      <script src="{{asset('public/assets/js/scrollbar/custom.js')}}"></script>
      <!-- Sidebar jquery-->
      <script src="{{asset('public/assets/js/config.js')}}"></script>
      <!-- Plugins JS start-->
      <script src="{{asset('public/assets/js/sidebar-menu.js')}}"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="{{asset('public/assets/js/script.js')}}"></script>
      <!-- login js-->
      <!-- Plugin used-->
      <script>
         $('#hi').delay(2500).slideUp(1200);
      </script>
   </body>
</html>a