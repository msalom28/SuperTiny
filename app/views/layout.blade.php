<!DOCTYPE html> <html class=no-js> <head> <meta charset=utf-8> <title>webapp</title> <meta name=description content=""> <meta name=viewport content="width=device-width"> <link rel="shortcut icon" href=/6df2b309.favicon.ico> <!-- Place favicon.ico and apple-touch-icon.png in the root directory --> <link rel=stylesheet href=styles/9c307a9d.vendor.css> <link rel=stylesheet href=styles/56cc3632.main.css>  <body> <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 
    <div class=container>
    <div class=header> <h3 class=text-muted>SuperTiny</h3> </div>
    @if(Session::has('flash_message'))
		<div class="alert alert-info alert-dismissable">
		<button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span></button>	
		{{ Session::get('flash_message') }}
		</div>
    @endif

  	@yield('content')

    </div><!-- End Container -->


    <script src=scripts/bcac3e9e.vendor.js></script> <script src=scripts/cb7562c6.plugins.js></script> <script src=scripts/b6c3df09.main.js></script