<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ABLEPBL - Universitas Padjajaran</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/now-ui-kit.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" />
</head>

<body class="landing-page">
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent " color-on-scroll="500">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('assets/img/blurred-image-1.jpg') }}">
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
                    <button class="btn btn-link btn-primary" data-toggle="modal" data-target="#create-test-modal">Create Test</button>
                  @if(count($test) > 0)
                    <center>
                        <table>
                          <tr>
                              <th width="50" style="text-align:center">No</th><th width="250" style="text-align:center">Test Name</th><th width="100" style="text-align:center">Question</th><th style="text-align:center">Action</th>
                          </tr>
                        @foreach($test as $tes)
                          <tr>
                              <td style="text-align:center">{{ $loop->iteration }}</td>
                              <td>{{ $tes->name }}</td>
                              <td style="text-align:center">{{ $tes->question }}</td>
                              <td style="text-align:center"><a class="btn btn-link btn-primary" href="{{ route('tutor.test.detail', $tes->id) }}">Detail</a>
                                @if($tes->question == 0)
                                  <a class="btn btn-link btn-primary" href="{{ route('tutor.test.question.create', $tes->id) }}">Add Question</a>
                                @endif
                              </td>
                          </tr>
                        @endforeach
                        </table>
                    </center>
                  @else
                    <p>Anda belum membuat tes</p>
                  @endif
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
                                <img src="{{ asset('images/foto1.jpeg') }}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Yuniar Dwi Yanti</h4>
                                <p class="category text-primary">Model</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="team-player">
                                <img src="{{ asset('images/foto2.jpeg') }}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
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
<script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/tether.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/now-ui-kit.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}" type="text/javascript"></script>
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
    	@if (session('status') == 'NotFound')
    	   swal("Not Found", "Wrong data provided. Try again later", "error");
    	@endif
    	@if (session('status') == 'Full')
    	   swal("Ooops", "No need to add another question. Try another test", "error");
    	@endif
    	@if (session('status') == 'Developed')
    	   swal("Ooops", "Feature is being developed. Try again later", "warning");
    	@endif
    	@if (session('status') == 'Success')
    	   swal("Data saved!", "You're test is ready. Tell you're student", "success");
    	@endif
  	@endif
</script>

</html>
