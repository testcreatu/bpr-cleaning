<!--BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            

            <li class="heading">
                <h3 class="uppercase">About Section</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-all-about')}}" class="nav-link nav-toggle">
                    <i class="fa fa-info"></i>
                    <span class="title">About us</span>
                </a>
            </li> 

            <li class="heading">
                <h3 class="uppercase">Section</h3>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-picture-o"></i>
                    <span class="title">Carousel</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-carousel')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Carousel</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-carousel')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Carousel</span>
                        </a>
                    </li>
                </ul>
            </li>
           {{--  <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">News Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-news-category')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new News Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-news-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all News Category</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Blog</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-blog')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Blog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-blog')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Blog</span>
                        </a>
                    </li>
                </ul>
            </li>
          {{--   <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="title">University</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-university')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new university</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-university')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all university</span>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-category')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Category</span>
                        </a>
                    </li>
                </ul>
            </li>

           {{--  <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Courses Detail</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-courses-detail')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Courses Detail</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-courses-detail')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Courses Detail</span>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">SubCategory </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-subCategory')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Sub Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-subCategory')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Sub Category</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title">Testimonial</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-testimonial')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Testimonial</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-testimonial')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Testimonial</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title">Services</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-services')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-services')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Services</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Clients</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-clients')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-clients')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Clients</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">FAQ</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-faq')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Faq</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-faq')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Faq</span>
                        </a>
                    </li>
                </ul>
            </li>

           {{--   <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Team</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-team')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Team</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-team')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Team</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <a href="{{url('cd-admin/view-all-social-links')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Social Links</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{url('cd-admin/view-page-titles')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Headers</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('cd-admin/view-all-features')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Features</span>
                </a>
            </li>
           {{--  <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="title">Scholorship</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('/cd-admin/add-scholorship-link')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Scholorship Link</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-available-scholorship')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Scholorship Link</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
{{-- 
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-tasks"></i>
                    <span class="title">Job</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-job-link')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Job Link</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-available-job')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Job link</span>
                        </a>
                    </li>
                </ul>
            </li> --}}


            <li class="heading">
                <h3 class="uppercase">Message Section</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-all-Subscription')}}" class="nav-link nav-toggle">
                    <i class="fa fa-comments"></i>
                    <span class="title">Subscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Message</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-contact')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/contact-replies')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Reply</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">SEO Report Request</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-seo-report')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Requests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/seo-report-replies')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Replied Requests</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Achivement</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-achivement')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Achivement</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-achivement')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Achivement</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-category')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Category</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Sub-Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-sub-category')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new sub-category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-sub-category')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all sub-category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-ol"></i>
                    <span class="title">Portfolio</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-portfolio')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Portfolio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-portfolio')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Portfolio</span>
                        </a>
                    </li>
                </ul>
            </li>

          


           

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="title">Career</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-career')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add new Career</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-all-career')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Career</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="heading">
                <h3 class="uppercase">Mail Section</h3>
            </li>

            <li class="nav-item">
                <a href="{{url('/cd-admin/view-all-applied')}}" class="nav-link nav-toggle">
                    <i class="fa fa-tasks"></i>
                    <span class="title">Career Applied</span>
                    <span class=""></span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('/cd-admin/view-all-consultant')}}" class="nav-link nav-toggle">
                    <i class="fa fa-clock-o"></i>
                    <span class="title">Consultant</span>
                    <span class=""></span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('/cd-admin/view-all-contact')}}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Contact</span>
                    <span class=""></span>
                </a>
            </li>


            <li class="heading">
                <h3 class="uppercase">Service Inquiry</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-all-service-inquiry')}}" class="nav-link nav-toggle">
                    <i class="fa fa-comments"></i>
                    <span class="title">Service Inquiry</span>
                </a>
            </li> --}}

            <li class="heading">
                <h3 class="uppercase">Others</h3>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-circle-o"></i>
                    <span class="title">SEO</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('/seo-view')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View all Seo</span>
                        </a>
                    </li>
                    
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
                <!-- END SIDEBAR