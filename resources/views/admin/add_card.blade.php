<!DOCTYPE html>
<html>
   <head>
      <title>Stripe Payment Page - HackTheStuff</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      @include('admin.includes.head') 
      <style type="text/css">
         .panel-title {
         display: inline;
         font-weight: bold;
         }
         .display-table {
         display: table;
         }
         .display-tr {
         display: table-row;
         }
         .display-td {
         display: table-cell;
         vertical-align: middle;
         width: 61%;
         }
      </style>
   </head>
   <body>
      <div class="page-wrapper compact-wrapper" id="pageWrapper">
      @include('admin.includes.topbar')
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
         @include('admin.includes.sidebar') 
         <div class="page-body">
            <div class="container-fluid ">
               <div class="page-title " style="padding-top:0px;">
                  <div class="row mt-4">
                     <div class="col-6">
                        <h3>Add Card</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                              <a>
                              <i data-feather="home"></i>
                              </a>
                           </li>
                           <li class="breadcrumb-item">Card </li>
                           <li class="breadcrumb-item active"> Add Card</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                    
                        <div class="card-header">
                          <p style ="color:red">850th will start charging each card $1.00 Every (chosen Recurrent Charges) to Each card* </p>
                           <form role="form"
                              action="{{ route('admin/stripe.post') }}"
                              method="post" class="require-validation"
                              data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                              @csrf 
                              <div class='form-row row'>
                                 <input name="user_id" value="{{Auth::user()->id}}" type='hidden'>
                                 <div class='form-row row mt-3'>
                                    <div class='col-xs-12  col-md-4 form-group required'>
                                    <label class='control-label'>Recurrent charges</label>
                                    <select class="js-example-basic-single col-sm-12" required name="current_charges">
                                       <option value="">Recurrent charges</option>

                                      
                                        <option value="1"> 1   </option>
                                        <option value="2"> 2   </option>
                                        <option value="3"> 3  </option>
                                        <option value="4"> 4   </option>
                                        <option value="5"> 5   </option>
                                        <option value="6"> 6 </option>
                                     
                                    </select>
                                 </div>
                                 
                                    <div class='col-xs-12 col-md-4 -formgroup  required'>
                                       <label class='control-label'>Card Number</label>
                                       <input autocomplete='off'  required class='form-control card-number'name="card_number" maxlength="16" size='20' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                       <label class='control-label'>CVC</label>
                                       <input autocomplete='off'  required class='form-control card-cvc' name="cvc" placeholder='ex. 311' size='4' type='password'>
                                    </div>
                                 </div>
                                 <div class='form-row row mt-4'>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                       <label class='control-label'>Expiration Month</label>
                                       <input class='form-control card-expiry-month'   required placeholder='MM' name="expiration_month" size='2' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                       <label class='control-label'>Expiration Year</label>
                                       <input class='form-control card-expiry-year' required placeholder='YYYY'   name="expiration_year" size='4' type='text'>
                                    </div>

                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                       <label class='control-label'>Nick Name</label>
                                       <input class='form-control card-expiry-year' required  name="nick_name" placeholder ="Nick Name"  type='text'>
                                    </div>
                                 </div>

                                 <div class='form-row row mt-4'>
                                    <div class='col-xs-12 col-md-4 form-group'>
                                       <label class='control-label'>Creditor Name</label>
                                       <input class='form-control '   placeholder='Creditor Name' name="creditor_name" type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group '>
                                       <label class='control-label'>Credit Limit</label>
                                       <input class='form-control '  placeholder='Credit Limit'   name="credit_limit"  type='text'>
                                    </div>

                                    <div class='col-xs-12 col-md-4 form-group '>
                                       <label class='control-label'>Opened Date</label>
                                       <input class='form-control '   name="opened_date" placeholder ="Opened Date"  type='date'>
                                    </div>
                                 </div>

                                 <div class='form-row row mt-3'>
                                    <div class='col-xs-12  col-md-4 form-group '>
                                    <label class='control-label'>Responsibility</label>
                                    <select class="js-example-basic-single col-sm-12"  name="responsibility">
                                       <option value="">Responsibility</option>

                                      
                                        <option value="1"> Personal   Credit Card</option>
                                        <option value="2"> Business Credit Card   </option>
                                       
                                    </select>
                                 </div>
                                 
                                 </div>


                                 <div class='col-md-12 error form-group hide'>
                                    <span class=' alert' style="display:none; font-size:17px; color:red;"> </span>
                                 </div>
                                 <div class="row">
                                    <div class="col-xs-12 card-footer text-end">
                                       <button class="btn btn-primary " type="submit">Add Card Now</button>
                                    </div>
                                 </div>
                           </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
            <!-- Container-fluid Ends-->
            <!-- footer start--> @include('admin.includes.footer')
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
      <script src="{{asset('public/assets/js/dropzone/dropzone.js')}}"></script>
      <script src="{{asset('public/assets/js/dropzone/dropzone-script.js')}}"></script>
      <script src="{{asset('public/assets/js/tooltip-init.js')}}"></script>
      <script src="{{asset('public/assets/js/notify/bootstrap-notify.min.js')}}"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="https://use.fontawesome.com/43c99054a6.js"></script>
      <script src="{{asset('public/assets/js/script.js')}}"></script>
      <script src="{{asset('public/assets/js/select2/select2.full.min.js')}}"></script>
      <script src="{{asset('public/assets/js/select2/select2-custom.js')}}"></script>
      <script src="{{asset('public/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/custom.js')}}"></script>
    
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
      <script>
         $('#hi').delay(2000).slideUp(1200);
      </script>
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
           } else {
               /* token contains id, last4, and card type */
               var token = response['id'];
               $form.find('input[type=text]','input[type=password]').empty();
               $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
               $form.get(0).submit();
           }
         }
         });
      </script>

@if (session('success')) <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Successfully',
        showConfirmButton: false,
        timer: 2500
      })
    </script> @endif


@if (session('error'))
  <script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Error',
  showConfirmButton: false,
  timer: 2500
})
</script>            
   @endif
</html>