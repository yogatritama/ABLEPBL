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
    <style>
        textarea {
            resize: none;
        }
    </style>
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
        <div class="page-header page-header-small" style="max-height:none; height:1750px">
            <div class="container">
                <div class="content-center">
                    <button class="btn btn-info btn-lg">{{ $name }}</button>
                    <br>
                    <br>
                    <form method="post" action="{{ route('tutor.test.question.create', $id) }}" id="createQuestionForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <span class="badge badge-info">Page 1</span>
                        </div>
                        <div class="form-group">
                            <textarea name="question1" placeholder="Define problem here" rows="5" cols="100" required></textarea>
                        </div>
                        <div class="row" style="background-color:white">
                            <div class="col-md-12">
                                <p class="btn btn-link btn-danger">Format input three field below :</p>
                                <p class="btn btn-link btn-danger">content | 1 for true</p>
                                <p class="btn btn-link btn-danger">content | 0 for false</p>
                            </div>
                            <div class="col-md-12">
                                <p class="btn btn-link btn-danger">Example :</p>
                                <textarea id="example1" disabled rows="3"></textarea>
                                <p class="btn btn-link btn-danger">will be</p>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        <p class="btn btn-link btn-danger">content1 | false option</p>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked>
                                    <label for="checkbox2">
                                        <p class="btn btn-link btn-danger">content2 | true option</p>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        <p class="btn btn-link btn-danger">content3 | false option</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Hypotheses</label><textarea name="hipotesis1" id="hipotesis1"></textarea><input type="hidden">
                            </div>
                            <div class="col-md-4">
                                <label>Process of Hypotheses</label><textarea name="prosesHipotesis1" id="prosesHipotesis1"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label>More Information</label><textarea name="moreInformation1" id="moreInformation1"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="badge badge-info">Page 2</span>
                        </div>
                        <div class="form-group">
                            <textarea name="question2" placeholder="Define problem here" rows="5" cols="100" required></textarea>
                        </div>
                        <div class="row" style="background-color:white">
                            <div class="col-md-12">
                                <p class="btn btn-link btn-danger">Format input three field below :</p>
                                <p class="btn btn-link btn-danger">content | 1 for true</p>
                                <p class="btn btn-link btn-danger">content | 0 for false</p>
                            </div>
                            <div class="col-md-12">
                                <p class="btn btn-link btn-danger">Example :</p>
                                <textarea id="example2" disabled rows="3"></textarea>
                                <p class="btn btn-link btn-danger">will be</p>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox" checked>
                                    <label for="checkbox1">
                                        <p class="btn btn-link btn-danger">content1 | true option</p>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        <p class="btn btn-link btn-danger">content2 | false option</p>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox" checked>
                                    <label for="checkbox3">
                                        <p class="btn btn-link btn-danger">content3 | true option</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>New Hypotheses</label><textarea name="hipotesis2" id="hipotesis2"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label>Confirmation by More Information</label><textarea name="prosesHipotesis2" id="prosesHipotesis2"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label>Result</label><textarea name="moreInformation2" id="moreInformation2"></textarea>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-success">Create</button>
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
<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script>
    $( document ).ready(function() {
        $("#example1").val("content1 | 0\ncontent2 | 1\ncontent3 | 0");
        $("#example2").val("content1 | 1\ncontent2 | 0\ncontent3 | 1");
    });

    CKEDITOR.replace( 'hipotesis1', {
      toolbarGroups : [
          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
          { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
          { name: 'tools', groups: [ 'tools' ] },
          { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
          { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
          { name: 'links', groups: [ 'links' ] },
          { name: 'insert', groups: [ 'insert' ] },
          { name: 'forms', groups: [ 'forms' ] },
          { name: 'others', groups: [ 'others' ] },
          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
          { name: 'styles', groups: [ 'styles' ] },
          { name: 'colors', groups: [ 'colors' ] },
          { name: 'about', groups: [ 'about' ] }
      ],

      removeButtons : 'PasteFromWord,Scayt,Link,Unlink,Anchor,SpecialChar,HorizontalRule,Table,Image,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,Blockquote,Styles,Format,About,Bold,Italic,Underline,Strike,Subscript,Superscript,Cut,Copy,Paste,PasteText,Redo,Undo,Maximize,Source',
      height : '200px'
    } );
    CKEDITOR.replace( 'hipotesis2', {
      toolbarGroups : [
          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
          { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
          { name: 'tools', groups: [ 'tools' ] },
          { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
          { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
          { name: 'links', groups: [ 'links' ] },
          { name: 'insert', groups: [ 'insert' ] },
          { name: 'forms', groups: [ 'forms' ] },
          { name: 'others', groups: [ 'others' ] },
          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
          { name: 'styles', groups: [ 'styles' ] },
          { name: 'colors', groups: [ 'colors' ] },
          { name: 'about', groups: [ 'about' ] }
      ],

      removeButtons : 'PasteFromWord,Scayt,Link,Unlink,Anchor,SpecialChar,HorizontalRule,Table,Image,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,Blockquote,Styles,Format,About,Bold,Italic,Underline,Strike,Subscript,Superscript,Cut,Copy,Paste,PasteText,Redo,Undo,Maximize,Source',
      height : '200px'
    } );
    CKEDITOR.replace( 'prosesHipotesis1', {
      toolbarGroups : [
          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
          { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
          { name: 'tools', groups: [ 'tools' ] },
          { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
          { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
          { name: 'links', groups: [ 'links' ] },
          { name: 'insert', groups: [ 'insert' ] },
          { name: 'forms', groups: [ 'forms' ] },
          { name: 'others', groups: [ 'others' ] },
          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
          { name: 'styles', groups: [ 'styles' ] },
          { name: 'colors', groups: [ 'colors' ] },
          { name: 'about', groups: [ 'about' ] }
      ],

      removeButtons : 'PasteFromWord,Scayt,Link,Unlink,Anchor,SpecialChar,HorizontalRule,Table,Image,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,Blockquote,Styles,Format,About,Bold,Italic,Underline,Strike,Subscript,Superscript,Cut,Copy,Paste,PasteText,Redo,Undo,Maximize,Source',
      height : '200px'
    } );
    CKEDITOR.replace( 'prosesHipotesis2', {
      toolbarGroups : [
          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
          { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
          { name: 'tools', groups: [ 'tools' ] },
          { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
          { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
          { name: 'links', groups: [ 'links' ] },
          { name: 'insert', groups: [ 'insert' ] },
          { name: 'forms', groups: [ 'forms' ] },
          { name: 'others', groups: [ 'others' ] },
          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
          { name: 'styles', groups: [ 'styles' ] },
          { name: 'colors', groups: [ 'colors' ] },
          { name: 'about', groups: [ 'about' ] }
      ],

      removeButtons : 'PasteFromWord,Scayt,Link,Unlink,Anchor,SpecialChar,HorizontalRule,Table,Image,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,Blockquote,Styles,Format,About,Bold,Italic,Underline,Strike,Subscript,Superscript,Cut,Copy,Paste,PasteText,Redo,Undo,Maximize,Source',
      height : '200px'
    } );
    CKEDITOR.replace( 'moreInformation1', {
      toolbarGroups : [
          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
          { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
          { name: 'tools', groups: [ 'tools' ] },
          { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
          { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
          { name: 'links', groups: [ 'links' ] },
          { name: 'insert', groups: [ 'insert' ] },
          { name: 'forms', groups: [ 'forms' ] },
          { name: 'others', groups: [ 'others' ] },
          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
          { name: 'styles', groups: [ 'styles' ] },
          { name: 'colors', groups: [ 'colors' ] },
          { name: 'about', groups: [ 'about' ] }
      ],

      removeButtons : 'PasteFromWord,Scayt,Link,Unlink,Anchor,SpecialChar,HorizontalRule,Table,Image,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,Blockquote,Styles,Format,About,Bold,Italic,Underline,Strike,Subscript,Superscript,Cut,Copy,Paste,PasteText,Redo,Undo,Maximize,Source',
      height : '200px'
    } );
    CKEDITOR.replace( 'moreInformation2', {
      toolbarGroups : [
          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
          { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
          { name: 'tools', groups: [ 'tools' ] },
          { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
          { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
          { name: 'links', groups: [ 'links' ] },
          { name: 'insert', groups: [ 'insert' ] },
          { name: 'forms', groups: [ 'forms' ] },
          { name: 'others', groups: [ 'others' ] },
          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
          { name: 'styles', groups: [ 'styles' ] },
          { name: 'colors', groups: [ 'colors' ] },
          { name: 'about', groups: [ 'about' ] }
      ],

      removeButtons : 'PasteFromWord,Scayt,Link,Unlink,Anchor,SpecialChar,HorizontalRule,Table,Image,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,Blockquote,Styles,Format,About,Bold,Italic,Underline,Strike,Subscript,Superscript,Cut,Copy,Paste,PasteText,Redo,Undo,Maximize,Source',
      height : '200px'
    } );
    @if (session('status'))
    	@if (session('status') == 'Failed')
    	   swal("We're so sorry", "Failed to create question. Try again later", "error");
    	@endif
  	@endif
</script>

</html>
