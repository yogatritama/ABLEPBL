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
                  <?php if(count($test) > 0): ?>
                    <center><table>
                        <tr>
                            <th width="50">No</th><th width="250">Test Name</th><th>Action</th>
                        </tr>
                      <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td><td><?php echo e($tes->name); ?></td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table></center>
                  <?php else: ?>
                    <p>Anda belum membuat tes</p>
                  <?php endif; ?>
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
    });
</script>

</html>
