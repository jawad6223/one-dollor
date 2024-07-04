<!DOCTYPE html>
<html lang="en">
   @include('admin.includes.head') 
   <body>
      <div class="loader-wrapper">
         <div class="loader-index">
            <span></span>
         </div>
         <svg>
            <defs></defs>
            <filter id="goo">
               <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
               <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
            </filter>
         </svg>
      </div>
      <div class="page-wrapper compact-wrapper" id="pageWrapper">
         @include('admin.includes.topbar')
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            @include('admin.includes.sidebar') 
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>User Profile</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a>
                                 <i data-feather="home"></i>
                                 </a>
                              </li>
                              <li class="breadcrumb-item">Users</li>
                              <li class="breadcrumb-item active">User Profile</li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="user-profile">
                     <div class="row">
                        @error('image')
                        <div class="alert alert-danger mb-2" id="hi" role="alert">
                           {{$message}}
                        </div>
                        @enderror
                        @error('email')
                        <div class="alert alert-danger mb-2" id="hi" role="alert">
                           {{$message}}
                        </div>
                        @enderror
                        @error('ssn')
                        <div class="alert alert-danger mb-2" id="hi" role="alert">
                           {{$message}}
                        </div>
                        @enderror
                        <!-- user profile first-style start-->
                        <div class="col-sm-12">
                           <div class="card hovercard text-center">
                              <div class="cardheader"></div>
                              <div class="user-image">
                                 <div class="avatar">
                                    <img alt="" src="{{asset('storage/app/' . $user->image)}}">
                                 </div>
                              </div>
                              <div class="info">
                                 <div class="row">
                                    <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="ttl-info text-start">
                                                <h6>
                                                   <i class="fa fa-envelope"></i>   Email
                                                </h6>
                                                <span>{{$user->email}}</span>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="ttl-info text-start">
                                                <h6>
                                                   <i class="fa fa-calendar"></i>   Contact Us
                                                </h6>
                                                <span>{{$user->contact}}</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                       <div class="user-designation">
                                          <div class="title">
                                             <a target="_blank" href="#">{{$user->name}}</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="ttl-info text-start">
                                                <h6>
                                                   <i class="fa fa-location-arrow"></i>   Location
                                                </h6>
                                                <span> {{$user->street}}, {{$user->city}},{{$user->state}},{{$user->zip}},{{$user->country}}</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                        </div>
                        <!-- user profile first-style end-->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12 col-xl-6 xl-100">
                        <div class="card">
                           <div class="card-body">
                              <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="info-home-tab" data-bs-toggle="tab" href="#info-home" role="tab" aria-controls="info-home" aria-selected="true">
                                    <i class=" fa fa-solid fa-file"></i>View Documents</a> 
                                 </li>
                              </ul>
                              <div class="tab-content" id="info-tabContent">
                                 <div class="tab-pane fade show active" id="info-home" role="tabpanel" aria-labelledby="info-home-tab">
                                    <div class="dt-ext table-responsive">
                                       <table class="display" id="responsive">
                                          <thead>
                                             <tr>
                                                <th>#</th>
                                                <th>Attach Documents</th>
                                             </tr>
                                          </thead>
                                          @php
                                          $count=1;
                                          @endphp
                                          <tbody>
                                             @foreach($docs as $docs) 
                                             <tr>
                                                <td>{{$count++}}</td>
                                                <td>
                                                   <a href="{{asset('public/files/'. $docs->file)}}" target="blank">{{$docs->file}}</a>
                                                </td>
                                             </tr>
                                             @endforeach 
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
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
      @if (session('message1'))
      <script>
         Swal.fire({
           position: 'top-end',
           icon: 'success',
           title: 'Successfully Updated',
           showConfirmButton: false,
           timer: 2500
         })
      </script>
      @endif
      <script>
         $('#hi').delay(2000).slideUp(1200);
      </script>
      <script src="{{asset('public/assets/input-mask.js')}}"></script>
      <script src="{{asset('public/assets/jquery.inputmask.bundle.min.js')}}"></script>
      <script>
         $("#ssn").inputmask("999-99-9999");
      </script>
      @if (session('delete'))
      <script>
         Swal.fire({
           position: 'top-end',
           icon: 'success',
           title: 'Successfully Delete',
           showConfirmButton: false,
           timer: 2500
         })
      </script>            
      @endif
   </body>
</html>