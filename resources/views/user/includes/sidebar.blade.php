@include('user.includes.head');
<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
   <div>
      <div class="logo-wrapper py-2" >
         <a href="{{url('user/dashboard')}}"><img class="img-fluid for-light pb-2" src="{{asset('public/assets/images/logo/logo.png')}}" alt="" style="height:70px; padding:16px; ">
        </a>
         <!-- <div class="back-btn"><i class="fa fa-angle-left"></i></div>
         <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div> -->
      </div>
      <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('public/assets/images/logo/logo-icon.png')}}" alt=""></a></div>
      <nav class="sidebar-main">
         <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
         <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
               
               <li class="back-btn">
                  <a href="index.html"><img class="img-fluid" src="{{asset('public/assets/images/logo/logo-icon.png')}}" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
               </li>

               <li class="sidebar-list">
                  <a class="sidebar-link " href="{{ url('/user/dashboard' )}}"><i data-feather="home"></i><span class="">Dashboard</span></a>
               </li>
               
              

               <li class="sidebar-list">
               
               <a class="sidebar-link " href="{{ url('/user/profile' )}}"><i data-feather="user"></i><span class="">Profile</span></a>
               
               </li>
             
               
               <li class="sidebar-list">
               
               <a class="sidebar-link " href="{{ url('/user/docs' )}}"><i data-feather="file-plus"></i><span class="">Add Documents</span></a>
               
               </li>
             

               <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="#"> <i data-feather="credit-card"></i><span>My Cards </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{url('user/add_card')}}"> Add New</a></li>
                     <li><a href="{{url('user/view_card')}}">View card</a></li>
                  </ul>
               </li>
    
               <li class="sidebar-list">
                  <a class="sidebar-link " href="{{ url('/user/card_transaction' )}}"><i data-feather="dollar-sign"></i><span class=""> Card Transactions</span></a>
               </li>

             
               <li class="sidebar-list">
                  <a class="sidebar-link " href="{{ url('/user/subscriber_transaction' )}}"><i data-feather="dollar-sign"></i><span class=""> SubscriptionTransactions</span></a>
               </li>

               <li class="sidebar-list" style="color: red;">
                  <a  class="sidebar-link " href="{{ url('/user/logout' )}}"><i data-feather="power" style="color: red !important;" ></i><span style="color: red !important;">Logout</span></a>
               </li>
            </ul>
         </div>
         <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
   </div>
</div>
<!-- Page Sidebar Ends-->