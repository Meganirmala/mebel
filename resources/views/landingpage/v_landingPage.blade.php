<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Mebel</title>
  <meta  name="description" content="tes konten">
  <meta  name="keywords" content="tes konten">
  <meta  name="author" content="tes konten">
  <meta  name="robots" content="tes konten">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Maxim - v4.6.0
  * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    @include('landingpage.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to Ria Art</h1>
      <h2>Kami adalah perusahaan kerajinan mebl ukir cukli dan souvenir khas Lombok</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
      @include('landingpage.about')
   <!-- End About Section -->
      
    <!-- ======= Testimonials Section ======= -->
      @include('landingpage.testimoni')
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Product</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-kerajinan">Kerajinan</li>
              <li data-filter=".filter-sovenir">Sovenir</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
          @foreach ($kerajinan as $data_kerajinan)
          <div class="col-lg-4 col-md-6 portfolio-item filter-kerajinan">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/'. $data_kerajinan->foto) }}" class="img-fluid" alt="" style="height: 267px; width: 100%; object-fit: cover;">
              <div class="portfolio-info">
                <h4>{{ $data_kerajinan->product_name }}</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ route('detail', $data_kerajinan->id) }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @foreach ($sovenir as $data_sovenir)
          <div class="col-lg-4 col-md-6 portfolio-item filter-sovenir">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/'. $data_sovenir->foto) }}" class="img-fluid" alt="" style="height: 267px; width: 100%; object-fit: cover;">
              <div class="portfolio-info">
                <h4>{{ $data_sovenir->product_name }}</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ route('detail', $data_sovenir->id) }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
      @include('landingpage.contact')
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('landingpage.footer')
  <!-- End Footer -->

  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
  <a href="https://api.whatsapp.com/send?phone=6281238426547&text=Hallo%20saya%20tertarik%20dengan%20produk%20yang%20ditawarkan" target="blank_" class="back-to-top d-flex align-items-center justify-content-center"><img src="{{ asset('frontend/assets/img/icon_wa1.png') }}" alt="" width="50px"></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
  {{-- <script> 
      $(document).ready(function () {
      $("#portfolio-flters").on("click", function (e) {
        //debugger
        //var ref_this = $("ul.tabs li a.active");

        var target = $(e.target).attr("data-filter");
        if (target != null)
            alert(target);
        else
            alert('There is no active element');

        });
      });
  </script> --}}

</body>

</html>