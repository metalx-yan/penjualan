<header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        {{-- <h1 class="text-light"><a href="index.html">Maxim</a></h1> --}}
        <h5><label for="" style="color:white; font-family:'Open Sans', sans-serif "><img src="{{ asset('images/sagita.png') }}" alt="">PT Sagita Indo Kreasi</label></h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Our Product</a></li>
          <li><a href="{{ route('stock') }}" target="_blank">Stock Check</a></li>
          <li><a href="{{ route('order') }}" target="_blank">Order Now</a></li>
          {{-- <li><a href="#portfolio">Stock Check</a></li>
          <li><a href="#team">Order Now</a></li> --}}
          {{-- <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li> --}}

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
