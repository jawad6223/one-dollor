<!DOCTYPE html>
<html lang="en">
   @include('admin.includes.head')
   <body>
      <div class="loader-wrapper">
         <div class="loader-index"><span></span></div>
         <svg>
            <defs></defs>
            <filter id="goo">
               <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
               <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
         </svg>
      </div>
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
                           <h3> Edit Package</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a>                                      
                                 <i data-feather="home"></i></a>
                              </li>
                              <li class="breadcrumb-item">Package</li>
                              <li class="breadcrumb-item active"> Edit Package</li>
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
                            
                              <form class="theme-form" method="post" action="{{url('admin/edit_pkg_action')}}">
                               
                                
@csrf
<input class="form-control" name="id" value="{{$sub->id}}" type="hidden">

                                    <div class="row mt-2">
                                          <div class="col-md-4 ">
                                          <label class="form-label">Tittle</label>
                                             <input class="form-control"  required id="branch_code" value="{{$sub->tittle}}" name="tittle" type="text" placeholder="Package Name">
                                          </div>
                                         
                                          <div class="col-md-4 ">
                                          <label class="form-label"> Price</label>
                                             <input class="form-control"  required id="branch_email" value="{{$sub->price}}" name="price" type="number" placeholder="Package Price">
                                          </div>
                                          <div class="col-md-4 ">
                                          <label class="form-label">Duration (Month)</label>
                                             <input class="form-control"  required id="company_phone" value="{{$sub->month}}" name="month" type="number" placeholder="Duration in Months">
                                          </div>
                                    </div>

<br>
                                    <div class="row mt-3">
                                       <div class="col-md-12 ">
                                       <label class="form-label"> Description</label>
                                          <textarea   name="description" rows="5" id="myTextarea">

                                          {!! htmlspecialchars_decode(nl2br($sub->description)) !!}
                                          </textarea>
                                       </div>
                                    </div>

                                 </div>

                                 
                                 <div class="card-footer text-end">
                                    <button class="btn btn-primary "  type="submit">Submit</button>
                                 </div>
                           </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
       
      <!-- footer start-->
      @include('admin.includes.footer')
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
      <script src="{{asset('public/assets/js/tinymce/tinymce.min.js')}}"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
      <script>
         $('#hi').delay(2000).slideUp(1200);

       
         tinymce.init({
            selector: '#myTextarea',
            tox_menubar: 'false',
         
         });
      </script>

      
@if (session('message'))
  <script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Successfully Edit',
  showConfirmButton: false,
  timer: 2500
})
</script>
                   
   @endif
   </body>
</html>