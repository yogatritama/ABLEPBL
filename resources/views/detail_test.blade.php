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
                    <li class="nav-item">
                        <a class="nav-link" href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="container">
                <div class="content-center">
                    
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
        <div class="modal fade show" id="create-test-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none">
            <div class="modal-dialog">
                <div class="modal-content">
                  <form method="post" action="{{ route('tutor.test.create') }}" id="createTestForm">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Create Test</h4>
                    </div>
                    <div class="modal-body">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Name</label><input type="text" name="name" class="form-control" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <span class="btn btn-info" id="reset"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</span>
                        <button class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Create</button>
                    </div>
                  </form>
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
        $('#reset').click(function(event) {
            $('#createTestForm')[0].reset();
        });
    });

    @if (session('status'))
    	@if (session('status') == 'Failed')
    	   swal("We're so sorry", "Failed to create test. Try again later", "error");
    	@endif
  	@endif
</script>

</html>
