<!DOCTYPE html>
<html lang="en">
   @include('user.includes.head')
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/datatables.css')}}">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
   <script>
      var dropzone = new Dropzone('#file-upload', {
          previewTemplate: document.querySelector('#preview-template').innerHTML,
          parallelUploads: 3,
          thumbnailHeight: 150,
          thumbnailWidth: 150,
          maxFilesize: 5,
          filesizeBase: 1500,
          thumbnail: function (file, dataUrl) {
              if (file.previewElement) {
                  file.previewElement.classList.remove("dz-file-preview");
                  var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                  for (var i = 0; i < images.length; i++) {
                      var thumbnailElement = images[i];
                      thumbnailElement.alt = file.name;
                      thumbnailElement.src = dataUrl;
                  }
                  setTimeout(function () {
                      file.previewElement.classList.add("dz-image-preview");
                  }, 1);
              }
          }
      });
      
      var minSteps = 6,
          maxSteps = 60,
          timeBetweenSteps = 100,
          bytesPerStep = 100000;
      
      dropzone.uploadFiles = function (files) {
          var self = this;
      
          for (var i = 0; i < files.length; i++) {
      
              var file = files[i];
              totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));
      
              for (var step = 0; step < totalSteps; step++) {
                  var duration = timeBetweenSteps * (step + 1);
                  setTimeout(function (file, totalSteps, step) {
                      return function () { 
                          file.upload = {
                              progress: 100 * (step + 1) / totalSteps,
                              total: file.size,
                              bytesSent: (step + 1) * file.size / totalSteps
                          };
      
                          self.emit('uploadprogress', file, file.upload.progress, file.upload
                              .bytesSent);
                          if (file.upload.progress == 100) {
                              file.status = Dropzone.SUCCESS;
                              self.emit("success", file, 'success', null);
                              self.emit("complete", file);
                              self.processQueue();
                          }
                      };
                  }(file, totalSteps, step), duration);
              }
          }
      }
      
   </script>
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
         @include('user.includes.topbar')
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            @include('user.includes.sidebar') 
            <div class="page-body">
               <div class="container-fluid">
                  <div class="row">
                     <!-- Individual column searching (text inputs) Starts-->
                     <div class="page-title " style="padding-top:0px;">
                        <div class="row ">
                           <div class="col-6">
                              <h3>Add Documents</h3>
                           </div>
                           <div class="col-6">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a>
                                    <i data-feather="home"></i>
                                    </a>
                                 </li>
                                 <li class="breadcrumb-item">Documents</li>
                                 <li class="breadcrumb-item active"> Add Documents</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <!-- Section -->
                     <div class="utf-submit-page-inner-box">
                        <div class="margin-top-65"></div>
                        <div id="dropzone">
                           <form action="{{ route('dropzoneFileUpload1') }}" class="dropzone"  id="file-upload" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="user_id" id="post_id" value="{{Auth::id()}}">
                              <div class="dz-message">
                                 <i class='sl sl-icon-cloud-upload'></i>  Drag and Drop Single/Multiple Files Here<br>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Section / End --> 
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
                                                <th> Document </th>
                                                <th>Action</th>
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
                                                <td><a class="btn-xs" href="{{url('user/docs_delete/' . $docs->id)}}" onClick="return confirm('Are you sure?')">
                                                   <i class="fa fa-times-circle fa-lg" style="color: red"></i>
                                                   </a>
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
                  </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
      <!-- Individual column searching (text inputs) Ends-->
      </div>
      <!-- Container-fluid Ends-->
      </div>
      <!-- footer start--> @include('user.includes.footer') 
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
      <script src="{{asset('public/assets/js/notify/bootstrap-notify.min.js')}}"></script>
      <script src="{{asset('public/assets/js/select2/select2.full.min.js')}}"></script>
      <script src="{{asset('public/assets/js/select2/select2-custom.js')}}"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="https://use.fontawesome.com/43c99054a6.js')}}"></script>
      <script src="{{asset('public/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('public/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
      <script src="{{asset('public/assets/js/script.js')}}"></script>
      <script src="{{asset('public/assets/js/script.js')}}"></script>
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
      <script src="{{asset('public/assets/js/dropzone/dropzone-script.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
      <script>
         $('#hi').delay(2000).slideUp(1200);
      </script>
      <script type="text/javascript">
         $('#datatable_page').dataTable({
           "pageLength": 25,
           "order": [
             [1, "desc"]
           ]
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
   <!-- Mirrored from user.pixelstrap.com/cuba/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:50:21 GMT -->
</html>