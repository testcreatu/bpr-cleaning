<div id="navbar" >  
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p>Call for Free Booking! We're the Dust Busters: <a href="tel:77787789">77787789</a> / <a href="tel:77787020">77787020</a></p>
        </div>
        <div class="col-md-4 header-icon">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
        </div>
      </div>
    </div>  
  </div>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light header-nav p-0" >
      <a class="navbar-brand" href="{{url('/')}}">
        <img  src="{{url('public/images/logo1.png')}}" class="img-fluid" alt=""></img>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-auto">
          <li class="nav-item {{ (request()->is('home*')) ? 'active' : '' }}">
            <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('about_us')}}">About</a>
              <a class="dropdown-item" href="{{url('why_us')}}">Why Us</a>
              <a class="dropdown-item" href="{{url('faq')}}">FAQ</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Service
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('service_detail')}}">Commercial Cleaning</a>
              <a class="dropdown-item" href="{{url('service_detail')}}">Office Cleaning</a>
              <a class="dropdown-item" href="{{url('service_detail')}}">Hotel</a>
              <a class="dropdown-item" href="{{url('service_detail')}}">Resturant</a>
              <a class="dropdown-item" href="{{url('service_detail')}}">Boat Cleaning</a>
            </div>
          </li>
          <li class="nav-item {{ (request()->is('blog_list*')) ? 'active' : '' }}">
            <a class="nav-link" href="{{url('blog_list')}}">Blog</a>
          </li>
          <li class="nav-item {{ (request()->is('contact_us*')) ? 'active' : '' }}">
            <a class="nav-link" href="{{url('contact_us')}}">Conatct</a>
          </li>
        </ul>
        <a href="{{url('cleaning_services')}}" class="btn btn1 d-none d-lg-block">Book Now</a>
      </div>
    </nav>
  </div>
</div>


<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>

