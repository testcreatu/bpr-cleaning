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
        <ul class="page-sidebar-menu  page-sidebar-menu-light page-sidebar-menu-hover-submenu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
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
                <a href="{{url('cd-admin/view-about')}}" class="nav-link nav-toggle">
                    <i class="fa fa-info"></i>
                    <span class="title">About us</span>
                </a>
            </li> 
            <li class="nav-item">
                <a href="{{url('cd-admin/view-why-us')}}" class="nav-link nav-toggle">
                    <i class="fa fa-question"></i>
                    <span class="title">Why Us</span>
                </a>
            </li> 

             <li class="nav-item">
                <a href="{{url('cd-admin/view-ceo-message')}}" class="nav-link nav-toggle">
                    <i class="fa fa-question"></i>
                    <span class="title">CEO Message</span>
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
                            <span class="title">Add Blog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-blog')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Blog</span>
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
                            <span class="title">Add Testimonial</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-testimonial')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Testimonial</span>
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
                            <span class="title">Add Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-services')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Services</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-quote-left"></i>
                    <span class="title">Compliments</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-compliments')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Compliments</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-compliments')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Compliments</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Partners</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-partners')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Partners</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-partners')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Partners</span>
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
                            <span class="title">Add Faq</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-faq')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Faq</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{url('cd-admin/view-social-links')}}" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Social Links</span>
                </a>
            </li>



            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-group"></i>
                    <span class="title">Features</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/add-features')}}" class="nav-link">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Features</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-features')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Features</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="heading">
                <h3 class="uppercase">Message Section</h3>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-call-requests')}}" class="nav-link nav-toggle">
                    <i class="fa fa-comments"></i>
                    <span class="title">Call Requests</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('cd-admin/view-subscriptions')}}" class="nav-link nav-toggle">
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
                        <a href="{{url('cd-admin/view-contact')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View  Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/contact-replies')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Reply</span>
                        </a>
                    </li>
                </ul>
            </li>


             <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Bookings</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-bookings')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View  New Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('cd-admin/view-replied-bookings')}}" class="nav-link">
                            <i class="fa fa-eye"></i>
                            <span class="title">View Replied Bookings </span>
                        </a>
                    </li>
                </ul>
            </li>

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
                            <span class="title">View all SEO</span>
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
