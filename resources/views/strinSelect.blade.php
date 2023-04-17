{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">TextExtract Here!</h5>
                    <p class="text-center small">add your image</p>
                  </div>
                  <form method="POST" action="{{route('show.string')}}" id="insert-form" enctype="multipart/form-data">
                    @if(Session::has('error'))
   <div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif
                    @csrf
                    <div class="form-group">
                        <label for="id">Enter The id</label>
                        <input type="text" class="form-control-file" id="id" name="id" accept="image/*">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Extract Text</button>
                </form>
                
           
                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#insert-form').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "{{ route('users.store') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(error) {
                        alert("Error: " + error.responseJSON.message);
                    }
                });
            });
        }); --}}
    {{-- </script> --}}

{{-- </body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link
	href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity=
"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
	crossorigin="anonymous"
	/>
	<link rel="stylesheet"
		href="style.css" />
	<link rel="preconnect"
		href="https://fonts.gstatic.com" />
	<link
	href=
"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
	rel="stylesheet"
	/>
	<title>profile View</title>
</head>
<body>
    <section class="vh-100" style="background-color: #b3c5e8;">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">

                  <div class="col-md-8">       
                    <div class="card-body p-4">         
                      <h3>John & Smith Solutions </h3>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">                      
                        <div class="col-6 mb-3" style="width: 2500px">
                            <h6>Content:</h6>
                            <p class="text-muted">{{$users->content}}</p>
                          </div>
                        <div class="col-6 mb-3" style="width: 2500px">
                          <h6>Phone No:</h6>
                          <p class="text-muted"123>{{$users->PhoneNo}}</p>
                        </div>
                        <div class="col-6 mb-3" style="width: 2500px">
                          <h5>email</h5>
                          <p class="text-muted"123>{{$users->Email}}</p>
                        </div>
                      
                      </div>
                      
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Declaration</h6>
                          <p class="text-muted">{{$users->Declaration}}</p>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Time Sheet No</h6>
                          <p class="text-muted" style="font-size: 50px;font">{{$users->TimeSheetNo}}</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-start">
              
                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>