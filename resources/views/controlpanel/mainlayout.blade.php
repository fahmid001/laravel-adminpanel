<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin | Panel</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="{{ URL::asset('/images/logo.png') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/dataTables.bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('plugins/select2/select2.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            
            @include('controlpanel.topmenu.top-menu')
            @include('controlpanel.leftmenu.left-menu')

            <div class="content-wrapper"style=" background-color:#FAF8F7; min-height: 690px;" >

                @yield('content')

            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>text here</b> 
                </div>
                <strong>Copyright &copy; 2016 <a href="" style="color: #4d90fe">fahmid</a>&nbsp;.</strong> All rights reserved.
            </footer>
        </div>
        <?php if (Request::segment(1) !== 'DateToDateTransactions' and Request::segment(1) !== 'selectTransactionsForAdmin') { ?>
            <script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <?php } ?>

        <script src="{{ URL::asset('js/jquery-2.1.4.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ URL::asset('plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
        <script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
        <script src="{{ URL::asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
        <script src="{{ URL::asset('dist/js/app.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/chartjs/Chart.min.js') }}"></script>
        <script src="{{ URL::asset('dist/js/demo.js') }}"></script>
    
    </body> 
</html>