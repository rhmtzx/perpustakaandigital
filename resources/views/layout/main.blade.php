<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>DigitalLibrary - Read Book Anywhere</title>
	<link rel="icon" href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/images/favicon-32x32.png')}}" type="image/png" />
	<link href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<link href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/js/pace.min.js')}}"></script>
	<link rel="stylesheet" href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<link rel="stylesheet" href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/css/icons.css')}}" />
	<link rel="stylesheet" href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/css/app.css')}}" />
	<link rel="stylesheet" href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/css/dark-sidebar.css')}}" />
	<link rel="stylesheet" href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/css/dark-theme.css')}}" />
	<!--Data Tables -->
	<link href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper">
			@include('layout.sidebar') 
			@include('layout.header')
		<div class="page-wrapper">
			@yield('content')
		</div>
		<div class="overlay toggle-btn-mobile"></div>
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	</div>

	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/vectormap/jquery-jvectormap-in-mill.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/vectormap/jquery-jvectormap-au-mill.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/js/index2.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/js/app.js')}}"></script>
	<script src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>

	<script>
    $(document).ready(function() {
        //Default data table
        $('#datatable').DataTable({
            language: {
            url: 'indo.json'
        }
        });
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['excel', 'pdf', 'print']
        });
        table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
	</script>
</body>
</html>