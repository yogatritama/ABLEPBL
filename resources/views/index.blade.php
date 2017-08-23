<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ABLEPBL - Universitas Padjajaran</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="../assets/css/sweetalert2.min.css" rel="stylesheet" />
</head>

<body class="landing-page">
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent " color-on-scroll="500">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                  @if(Auth::guard('tutor')->check() || Auth::guard('mahasiswa')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                    </li>
                  @else
                    <li class="nav-item">
                        <button class="btn btn-link btn-primary" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                    </li>
                    <pre> </pre>
                    <li class="nav-item">
                        <button class="btn btn-link btn-info" data-toggle="modal" data-target="#register-modal"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
                    </li>
                  @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg6.jpg');"></div>
            <div class="container">
                <div class="content-center">
                    <h1 class="title">ABLEPBL</h1>
                    <div class="text-center">
                      <p>Under Development by Magister Kebidanan Universitas Padjadjaran</p>
                      <p>We are working hard to finish our amazing new website. We're almost done</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-team text-center ">
            <div class="container">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="team-player">
                                <img src="../images/foto1.jpeg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Yuniar Dwi Yanti</h4>
                                <p class="category text-primary">Model</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="team-player">
                                <img src="../images/foto2.jpeg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Dessy Meilani Hutasoit</h4>
                                <p class="category text-primary">Model</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade show" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none">
            <div class="modal-dialog">
                <div class="modal-content">
                  <form method="post" action="login" id="loginForm">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Login</h4>
                    </div>
                    <div class="modal-body">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Email</label><input type="email" name="email" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Password</label><input type="password" name="password" class="form-control" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <span class="btn btn-info" id="resetLogin"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</span>
                        <button class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="modal fade show" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none">
            <div class="modal-dialog">
                <div class="modal-content">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i> Tutor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                <i class="fa fa-user-circle" aria-hidden="true"></i> Mahasiswa
                            </a>
                        </li>
                    </ul>
                    <div class="card-block">
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <form method="post" action="register_tutor" id="registerTutorForm">
                                  <div class="modal-header justify-content-center">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                          <i class="now-ui-icons ui-1_simple-remove"></i>
                                      </button>
                                      <h4 class="title title-up">Register</h4>
                                  </div>
                                  <div class="modal-body">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                      <label>Name</label><input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label><input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Password</label><input type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Institution</label><input type="text" name="institution" class="form-control">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                      <span class="btn btn-info" id="resetRegisterTutor"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</span>
                                      <button class="btn btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
                                  </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">
                                <form method="post" action="register_mahasiswa" id="registerMahasiswaForm">
                                  <div class="modal-header justify-content-center">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                          <i class="now-ui-icons ui-1_simple-remove"></i>
                                      </button>
                                      <h4 class="title title-up">Register</h4>
                                  </div>
                                  <div class="modal-body">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                      <label>Name</label><input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label><input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Password</label><input type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Institution</label><input type="text" name="institution" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Tutor</label><input type="text" name="tutor" class="form-control">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                      <span class="btn btn-info" id="resetRegisterMahasiswa"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</span>
                                      <button class="btn btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="https://www.creative-tim.com/" target="_blank">Creative-Tim</a>. Coded by
                    <a href="http://www.unpad.ac.id" target="_blank">Universitas Padjajaran</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>
<script src="../assets/js/sweetalert2.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
      $('#resetLogin').click(function(event) {
          $('#loginForm')[0].reset();
      });
      $('#resetRegisterTutor').click(function(event) {
          $('#registerTutorForm')[0].reset();
      });
      $('#resetRegisterMahasiswa').click(function(event) {
          $('#registerMahasiswaForm')[0].reset();
      });
    });

    @if (session('status'))
    	@if (session('status') == 'Success')
    	   swal("You're Ready!", "You're now registered. Please login to continue", "success");
    	@endif
    	@if (session('status') == 'Failed')
    	   swal("We're so sorry", "Failed to register. Try again later", "error");
    	@endif
    	@if (session('status') == 'Unauthorized')
    	   swal("Ooops", "Wrong email password combination", "warning");
    	@endif
    	@if (session('status') == 'Unregistered')
    	   swal("Not Found", "We can't find your account. Try register instead", "error");
    	@endif
      @if (session('status') == 'Prohibited')
         swal("Ooops", "Please login before access that page", "warning");
      @endif
  	@endif
</script>

</html>
