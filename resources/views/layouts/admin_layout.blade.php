<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Work4u - Admin</title>
    <!-- base:css -->
    
    <link rel="stylesheet" href="{{asset('admin/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2020.2.617/styles/kendo.default-v2.min.css" />
    <link rel="stylesheet" href="{{asset('admin/js/dataTables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/admin.custom.css')}}">

    <!-- endinject -->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/gif" sizes="64x64">
    <!-- base:js -->
    <script src="{{asset('admin/js/vendor.bundle.base.js')}}"></script>

    <!-- endinject -->
    <script src="https://kendo.cdn.telerik.com/2020.2.617/js/kendo.all.min.js"></script>
    <script src="{{asset('admin/js/plugins/sweetalert.min.js')}}"></script>
    <script src="{{asset('admin/js/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/uploader/dropify/dropify.min.js')}}"></script>
        <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <!-- <script src="{{asset('admin/js/template.js')}}"></script> -->
    <script src="{{asset('admin/js/alerts.js')}}"></script>
    <script src="{{asset('admin/js/parsley/parsley.min.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/app-js/custom.js')}}"></script>
    <!-- End custom js for this page-->
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                <a class="navbar-brand brand-logo" href="{{route('dashboard')}}"><img src="{{asset('admin/img/logo.png')}}" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('admin/img/logo.png')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
               
                
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <?php 
                            $notificationList = App\Notifications::where('is_seen', false)->orderBy('id', 'desc')->take(7)->get();
                            ?>

                            @foreach($notificationList as $notify)
                            <a href="{{route('admin_view_study_offer', $notify->post_id)}}" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">{{$notify->title}}</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        
                                        {{ Carbon\Carbon::parse($notify->created_at)->diffForHumans()}} 
                                    </p>
                                </div>
                            </a>
                            @endforeach
                            <p class="text-center"><a href="{{route('notification_list')}}">Show All Notifications</a></p>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('admin/img/user.jpg')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" target="_blank">
                            <i class="mdi mdi-link menu-icon"></i>
                            <span class="menu-title">Visit Side</span>
                        </a>
                    </li>
                    <li class="nav-item notification_nav">
                        <a class="nav-link" href="{{route('notification_list')}}">
                            <i class="mdi mdi-bell-outline menu-icon"></i>
                            <span class="menu-title">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('mail_index')}}">
                            <i class="mdi mdi-email menu-icon"></i>
                            <span class="menu-title">Mail</span>
                        </a>
                    </li>
                    <li class="nav-item sms_nav">
                        <a class="nav-link" href="{{route('sms_list')}}">
                            <i class="mdi mdi-message-plus menu-icon"></i>
                            <span class="menu-title">SMS</span>
                        </a>
                    </li>
                    <li class="nav-item faq_nav">
                        <a class="nav-link" href="{{route('faqs.index')}}">
                            <i class="mdi mdi-comment-question-outline menu-icon"></i>
                            <span class="menu-title">FAQ</span>
                        </a>
                    </li> 

                    <li class="nav-item job_nav">
                        <a class="nav-link nav_trigger" data-toggle="collapse" href="#job_offer" aria-expanded="false" aria-controls="study_offer">
                            <i class="mdi mdi-briefcase menu-icon"></i>
                            <span class="menu-title">Job</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse sub_nav" id="job_offer">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item sub_ddl_1"> <a class="nav-link" href="{{route('admin_job_benefits')}}">Compensation & Benefits</a></li>
                                <li class="nav-item sub_ddl_2"> <a class="nav-link" href="{{route('admin_job_employment')}}">Employment Status</a></li>
                                <li class="nav-item sub_ddl_3"> <a class="nav-link" href="{{route('admin_job_category')}}">Categories</a></li>
                                <li class="nav-item sub_ddl_4"> <a class="nav-link" href="{{route('admin_job_countries')}}">Countries</a></li>
                                <li class="nav-item sub_ddl_5"> <a class="nav-link" href="{{route('admin_all_job')}}">All Job</a></li>
                                <li class="nav-item sub_ddl_6"> <a class="nav-link" href="{{route('admin_job_comments')}}">Comments</a></li>
                                <li class="nav-item sub_ddl_7"> <a class="nav-link" href="{{route('job_seeker_application')}}">Applications</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item study_nav">
                        <a class="nav-link nav_trigger" data-toggle="collapse" href="#study_offer" aria-expanded="false" aria-controls="study_offer">
                            <i class="mdi mdi-library menu-icon"></i>
                            <span class="menu-title">Study</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse sub_nav" id="study_offer">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item sub_ddl_1"> <a class="nav-link" href="{{route('admin_study_country')}}">Countries</a></li>
                                <li class="nav-item sub_ddl_2"> <a class="nav-link" href="{{route('admin_study_offer')}}">Offeres</a></li>
                                <li class="nav-item sub_ddl_3"> <a class="nav-link" href="{{route('admin_study_comments')}}">Comments</a></li>
                                <li class="nav-item sub_ddl_4"> <a class="nav-link" href="{{route('admin_study_seeker_application')}}">Applications</a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item immigration_nav">
                        <a class="nav-link nav_trigger" data-toggle="collapse" href="#immigration_offer" aria-expanded="false" aria-controls="immigration_offer">
                            <i class="mdi mdi-earth menu-icon"></i>
                            <span class="menu-title">Immigrations</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse sub_nav" id="immigration_offer">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item sub_ddl_1"> <a class="nav-link" href="{{route('admin_immigrations_countries')}}">Countries</a></li>
                                <li class="nav-item sub_ddl_2"> <a class="nav-link" href="{{route('admin_immigrations_categories')}}">Categories</a></li>
                                <li class="nav-item sub_ddl_3"> <a class="nav-link" href="{{route('admin_immigrations_offer')}}">All Immigrations</a></li>
                                <li class="nav-item sub_ddl_4"> <a class="nav-link" href="{{route('admin_immigration_comments')}}">Comments</a></li>
                                <li class="nav-item sub_ddl_5"> <a class="nav-link" href="{{route('admin_immigration_seeker_application')}}">Applications</a></li>
                            </ul>
                        </div>
                    </li>
                   
                    <li class="nav-item settings_nav">
                        <a class="nav-link" data-toggle="collapse" href="#app_settings" aria-expanded="false" aria-controls="app_settings">
                            <i class="mdi mdi-settings menu-icon"></i>
                            <span class="menu-title">Settings</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse sub_nav" id="app_settings">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item sub_ddl_1"> <a class="nav-link" href="{{route('site_settings')}}">Site Settings</a></li>
                                <li class="nav-item sub_ddl_2"> <a class="nav-link" href="{{route('about_us_settings')}}">About Us</a></li>

                                <li class="nav-item sub_ddl_3"> <a class="nav-link" href="{{route('privacy_policy')}}">Privacy Policy</a></li>

                                <li class="nav-item sub_ddl_4"> <a class="nav-link" href="{{route('terms_conditions')}}">Terms & Conditions</a></li>

                                <li class="nav-item sub_ddl_5"> <a class="nav-link" href="{{route('others_settings')}}">Others</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>



</body>

</html>
