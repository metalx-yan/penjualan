<!DOCTYPE html>
<html lang="en">

    @include('template_partials._head')

<body>
    @include('template_partials._navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to Website PT Sagita Indo Kreasi</h1>
      <h2>Slogan Sagita</h2>
      <a href="#about">&nbsp;</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <span><h1 style="text-align:center; color: #1bac91;">PT Sagita Indo Kreasi</h1></span>
        <hr>
        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <h3><b>Visi</b></h3>
            <p style="text-align:justify;">PT Sagita Indo Kreasi akan menjadi salah satu perusahaan konstruksi terbaik di Indonesia dengan penekanan pada pertumbungan yang 
                berkelanjutan dan pembangunan kompetensi melalui pengembangan sumber daya manusia, menajemen teknologi dan tata kelola perusahaan yang baik.</p>
            {{-- <img src="template/assets/img/about-img.jpg" class="img-fluid" alt=""> --}}
          </div>
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                <h3 style="margin-left: 20px"><b>Misi</b></h3>
                <ul>
                    <li style="text-align:justify;">Meningkatkan daya saing perusahaan di industri jasa konstruksi dengan mengembangkan pelayanan dan teknuogi terbaik kepada pelanggan dalam memenuhi harapan pemangku kepentingan.</li>
                    <li style="text-align:justify;">Meningkatkan pelatihan SDM untuk menghasilkan tenaga kerja yang berkualitas dan menciptakan lingkungan kerja yang kondusif, serta menyediakan lapangan kerja yang luas.</li>
                    <li style="text-align:justify;">Serta turut berpartisipasi dalam pembangunan Negara Republik Indonesia.</li>
                </ul>
            {{-- <img src="template/assets/img/about-img.jpg" class="img-fluid" alt=""> --}}
            </div>
          {{-- <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Voluptatem dignissimos provident</h3>
            <p data-aos="fade-up">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>Corporis voluptates sit</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>Ullamco laboris nisi</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt"></i>
              <h4>Ullamco laboris nisi</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>

          </div> --}}
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-12 col-md-6 content-item" data-aos="fade-in">
            <span><h1>Kegiatan Perusahaan</h1></span>
            <br>
            <ol> 
                <li style="text-align:justify;">Pekerjaan Konstruksi Pekerjaan pembangunan sarana dam prasarana yang meliputi pembangunan gedung (building construction), pembangunan prasarana sipil (civil engineer) dan instalasi mekenikal dan elektrikal.</li>
                <li style="text-align:justify;">Desain pekerjaan merancang dan mengatur pola, model dan tata letak baik dari interior maupun eksterior sehingga dapat memenuhi kebutuhan dan keinginan client.</li>
                <li style="text-align:justify;">Wood Working Pekerjaan yang berhubungan dengan pengolahan kayu, misalnya pembuatan kusen, pintu, rangka plafond, rangka atap dan lain sebagainya.</li>
                <li style="text-align:justify;">Furniture perancangan, pembuatan dan pemeliharaan / make over furniture seperti meja, kursi , kitchen set dan meuble yang lainnya.</li>
            </ol>
            {{-- <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p> --}}
          </div>

          {{-- <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div> --}}

          {{-- <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="200">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="300">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="400">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="500">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div> --}}

        </div>

      </div>
    </section><!-- End Steps Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <span><h1><b>Project History</b></h1></span>

            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#tab-1">
                  {{-- <h4>Modi sit est</h4> --}}
                  <p >1. Fit Out ANZ Surabaya, Denpasar, Palembang, Solo</p>
                  <p style="margin-top:10px">2. Fit Our Tason Holding Office</p>
                  <p style="margin-top:10px">3. Reinstatement ex. ATM</p>
                  <p style="margin-top:10px">4. Relokasi ANZ Tower Lt.16 ke Lt.15</p>
                  <p style="margin-top:10px">5. Pemasangan Workstation ANZ Tower Lt.5</p>
                  <p style="margin-top:10px">6. Renovasi ANZ Tower Lt.2</p>
                  <p style="margin-top:10px">7. Pekerjaan Fit Out ANZ Juanda : Main and Rear Building</p>
                </a>
              </li>
              {{-- <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Unde praesentium sed</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Pariatur explicabo vel</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Nostrum qui quasi</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li> --}}
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                    <img src="{{ asset('images/Interior 1.jpg') }}" alt="" height="160px" >
                    <img src="{{ asset('images/Interior 2.jpg') }}" alt="" height="160px" width="250px" style="margin-left:60px">
                </figure>
                <figure>
                    <img src="{{ asset('images/Interior 3.jpg') }}" alt="" height="160px" width="270px">
                    <img src="{{ asset('images/Proyek 1.jpg') }}" alt="" height="160px" width="250px" style="margin-left:60px">
                </figure>
                
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Product</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
              <h4 class="title"><a href="" data-toggle="modal" data-target=".bd-example-modal-lgsss">Wood Working</a></h4>
              <hr>
              <img src="{{ asset('images/Civil engineering.jpg') }}" height="100px"  alt="" style="margin-top:30px;">
              {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              {{-- <div class="icon"><i class="bx bx-file"></i></div> --}}
              <h4 class="title"><a href="" data-toggle="modal" data-target=".bd-example-modal-lgss">Furniture</a></h4>
              <hr>

              <img src="{{ asset('images/Desain-Furniture-Kantor-Kekinian.jpg') }}" height="120px"  alt="" style="margin-top:30px;">

              {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              {{-- <div class="icon"><i class="bx bx-tachometer"></i></div> --}}

              <h4 class="title"><a href="" data-toggle="modal" data-target=".bd-example-modal-lgs">Design Arch & Furniture</a></h4>
              <hr>
              <img src="{{ asset('images/konstruksi.png') }}" height="110px"  alt="" style="margin-top:30px;">

              {{-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              {{-- <div class="icon"><i class="bx bx-world"></i></div> --}}
              <h4 class="title"><a href="" data-toggle="modal" data-target=".bd-example-modal-lg">Construct Working</a></h4>
              {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}

              
              <hr>
              <img src="{{ asset('images/Interior 1.jpg') }}" height="110px"  alt="" style="margin-top:30px;">
              {{-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p> --}}
            </div>
          </div>

        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="container-fluid">                    
                  <hr>
                  <h3><center>Construct Working</center></h3>
                  @foreach (App\Increment::all() as $inc)
                  @if ($inc->parents->name == 'construct working')
                      
              <hr>
                <div class="row">
                    <img src="{{ asset($inc->images) }}" alt="" height="80%" width="30%">  
                    <b><span>{{ ucwords($inc->name) }}</span></b>
                  </div>                      

                  <a href="{{ route('click', $inc->id) }}" class="btn btn-primary btn-sm float-right">Teken</a>
                
                @endif
                @endforeach
                <hr>

              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bd-example-modal-lgs" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="container-fluid">
                <hr>
                <h3><center>Design Arch & Furniture</center></h3>
                @foreach (App\Increment::all() as $inc)
                    @if ($inc->parents->name == 'design architecture and furniture')
                        
                <hr>
                  <div class="row">
                      <img src="{{ asset($inc->images) }}" alt="" height="80%" width="30%">  
                      <b><span>{{ ucwords($inc->name) }}</span></b>
                    </div>                      

                    <a href="{{ route('click', $inc->id) }}" class="btn btn-primary btn-sm float-right">Teken</a>
                  
                  @endif
                  @endforeach
                <hr>

              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bd-example-modal-lgss" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="container-fluid">                    
                    <hr>
                    <h3><center>Furniture</center></h3>
                    @foreach (App\Increment::all() as $inc)
                    @if ($inc->parents->name == 'furniture')
                        
                <hr>
                  <div class="row">
                      <img src="{{ asset($inc->images) }}" alt="" height="80%" width="30%">  
                      <b><span>{{ ucwords($inc->name) }}</span></b>
                    </div>                      
                    <a href="{{ route('click', $inc->id) }}" class="btn btn-primary btn-sm float-right">Teken</a>
                  
                  @endif
                  @endforeach
                  <hr>
  
                </div>
              </div>
            </div>
          </div>
  
          <div class="modal fade bd-example-modal-lgsss" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="container-fluid">
                  <hr>
                  <h3><center>Wood Working</center></h3>
                  @foreach (App\Increment::all() as $inc)
                      @if ($inc->parents->name == 'wood working')
                          
                  <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <img src="{{ asset($inc->images) }}" alt="" height="100%" width="60%">  
                        <b><span>{{ ucwords($inc->name) }}</span></b>
                      </div>                      
                    </div>
                    
                    <a href="{{ route('click', $inc->id) }}" class="btn btn-primary btn-sm float-right">Teken</a>
                    
                    @endif
                    @endforeach
                  <hr>
  
                </div>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End Services Section -->
    

    
  </main><!-- End #main -->
  {{-- <a href=""><i class="icofont-brand-whatsapp"></i></a> --}}

  {{-- <div style="position:fixed;left:20px;bottom:20px;">
    <a href="https://web.whatsapp.com/send?phone=+628981493042&text=Selamat datang di PT Sagita Indo Kreasi" target="_blank">
    <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
    <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami</button></a>
  </div>   --}}
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  {{-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}
  
  {{-- @include('template_partials._footer') --}}

  @include('template_partials._javascript')

  <!-- Vendor JS Files -->

</body>

</html>