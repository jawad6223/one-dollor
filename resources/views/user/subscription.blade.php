<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from admin.pixelstrap.com/cuba/theme/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:50:29 GMT -->
   @include('user.includes.head')
   <body>
      <!-- login page start-->
      <div class="container-fluid p-0">
         <div class="row m-0">
            <div class="col-12 p-0">
               <div class="login-card">
                  <div>
                     <div><a class="logo" href=""><img class="img-fluid for-light" src="{{asset('public/assets/images/logo/login.png')}}" alt="looginpage" style="height:65px;"><img class="img-fluid for-dark" src="{{asset('public/assets/images/logo/logo_dark.png')}}" alt="looginpage" style="height:65px;"></a></div>
                     <div class="login-main">
                     <h4>Card Payment information</h4>
                           <p style="color:red;">Subscription for 3 Month</p>
                     <form role="form"
                              action="{{ route('user/stripe.post1') }}"
                              method="post" class="require-validation"
                              data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                              @csrf 
                              <div class='form-row row'>
                                 <input name="user_id" value="{{$id}}" type='hidden'>
                                 <div class='form-row row mt-3'>
                                   
                                 
                                    <div class='col-xs-12 col-md-12 form-group  required'>
                                       <label class='control-label'>Card Number</label>
                                       <input autocomplete='off'  required class='form-control card-number'name="card_number" maxlength="16" size='20' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-12 form-group cvc required'>
                                       <label class='control-label'>CVC</label>
                                       <input autocomplete='off'  required class='form-control card-cvc' name="cvc" placeholder='ex. 311' size='4' type='password'>
                                    </div>
                                
                                
                                    <div class='col-xs-12 col-md-12 form-group expiration required'>
                                       <label class='control-label'>Expiration Month</label>
                                       <input class='form-control card-expiry-month'   required placeholder='MM' name="expiration_month" size='2' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-12 form-group expiration required'>
                                       <label class='control-label'>Expiration Year</label>
                                       <input class='form-control card-expiry-year' required placeholder='YYYY'   name="expiration_year" size='4' type='text'>
                                    </div>
                                 </div>
                                 <div class='col-md-12 error form-group hide' style="margin:30px;">
                                    <span class=' alert' style="display:none; font-size:13px; color:red;"> </span>
                                 </div>
                                 <div class="row">
                                    <div class="col-xs-12  text-end">
                                       <button class="btn btn-primary btn-block w-100  " type="submit">Pay Now</button>
                                    </div>
                                 </div>
                           </form>
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
         <!-- Sidebar jquery-->
         <script src="{{asset('public/assets/js/config.js')}}"></script>
         <!-- Plugins JS start-->
         <!-- Plugins JS Ends-->
         <!-- Theme js-->
         <script src="{{asset('public/assets/js/script.js')}}"></script>
         <!-- login js-->
         <!-- Plugin used-->
         <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
         <!-- Plugin used-->
        
         <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <script type="text/javascript">
         $(function() {
         var $form = $(".require-validation");
         $('form.require-validation').bind('submit', function(e) {
           var $form = $(".require-validation"),
               inputSelector = ['input[type=email]', 'input[type=password]',
                   'input[type=text]', 'input[type=file]',
                   'textarea'
               ].join(', '),
               $inputs = $form.find('.required').find(inputSelector),
               $errorMessage = $form.find('div.error'),
               valid = true;
           $errorMessage.addClass('hide');
           $('.has-error').removeClass('has-error');
           $('.alert').show();
           $inputs.each(function(i, el) {
               var $input = $(el);
               if ($input.val() === '') {
                   $input.parent().addClass('has-error');
                   $errorMessage.removeClass('hide');
                   e.preventDefault();
               }
           });
           if (!$form.data('cc-on-file')) {
               e.preventDefault();
               Stripe.setPublishableKey($form.data('stripe-publishable-key'));
               Stripe.createToken({
                   number: $('.card-number').val(),
                   cvc: $('.card-cvc').val(),
                   exp_month: $('.card-expiry-month').val(),
                   exp_year: $('.card-expiry-year').val()
               }, stripeResponseHandler);
           }
         });
         function stripeResponseHandler(status, response) {
           console.log(response);
           if (response.error) {
               $('.error')
                   .removeClass('hide')
                   .find('.alert')
                   .text(response.error.message);
           } 
           else {
               /* token contains id, last4, and card type */
               var token = response['id'];
               $form.find('input[type=text]','input[type=password]').empty();
               $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
               $form.get(0).submit();
           }
         }
         });
      </script>


         
      </div>
   </body>
   <!-- Mirrored from admin.pixelstrap.com/cuba/theme/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:50:29 GMT -->
</html>