<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coding web design</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	  <![endif]-->
</head>
    <body>
        <header class="site-header dark-bg">
            <div class="container site-header-inner">
                <!-- logo -->
                <div class="site-logo">Demo practice</div>
                <!-- navbar -->
                <nav class="nav site-menu pull-right">
                    @foreach($list as $index)
                        {!!'<a href="#" class="nav-link">'. $index. '</a>'!!}
                        {{-- $loop have to update laravel to version 5.5
                        @if($loop -> first)
                            {!!'<a href="#" class="nav-link active">'. $index. '</a>'!!}
                        @else
                            {!!'<a href="#" class="nav-link">'. $index. '</a>'!!}
                        @endif --}}
                    @endforeach
                </nav>
            </div>
        </header>
        <div class="site-main">
            <div class="container site-main-inner">
                <div class="content">
                    <!-- Main content -->
                    <img src="./img/background.JPG" width="100%"/>
                </div>
            </div>
        </div>
        <footer class="site-footer">
        </footer>
    </body>
</html>
