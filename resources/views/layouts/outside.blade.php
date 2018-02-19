
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="LMV">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
        <link rel="shortcut icon" href="{{{ url('images/favicon.png')}}}" type="image/x-icon"/>
        <title>@yield('tabTitle')</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel='stylesheet' id='bootstrap-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' type='text/css' media='all' />
        <!-- End of head section HTML codes -->
        <link href="{{{ url('css/main.css') }}}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>            
            
        <!--[if lt IE 9]> 
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body> 

<!--  Very top bar - Social links and login  -->
<div id="header-total-size">
        <section id="top-wrepper">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-8" id="socialandflags">
                        <div class="top-col-1 " id="social-links">
                            <ul>
                                <li>Stay In Touch</li>
                                <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#."><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#."><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-xs-4" id="loginbuttons">
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
<!--  End of very top bar   -->        



<!--  Main Nav bar  -->
        <nav id="navigation" class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{{  url('')  }}}"><img id="header-main-logo" src="images/NBC-logo.png" alt="logo"/></a>
                </div>

                <div class="col-sm-6 pull-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @yield('navBar_li')
                    </ul>
                </div>
            </div>
        </nav>
</div>
<!--  end of main nav bar  -->
        <div id="contentholder">
            @yield('content')
        </div>

        <footer id="footer-wrepper">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="col-sm-8">
                            <p>© Copyright Nottingham Boat Co LTD {{{ date('Y') }}}</p>
                        </div> 
                        <div class="col-sm-4">
                            <p><a href="#">User Agreement</a>&nbsp; &nbsp;|&nbsp; &nbsp;<a href="#"> Privacy Policy</a></p>
                        </div>
                    </div>
    
                </div>
            </div>
        </footer>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        <script>

            /* == Some JS to make the navbar sticky on scrollpast == */
            $(document).ready(function() {
                var stickyNavTop = $('.navbar-default').offset().top;
                //stickyNav();
                $(window).scroll(function() {
                    scrollTop = $(window).scrollTop();
                    if (scrollTop > stickyNavTop) {
                        $('.navbar-default').addClass('sticky');
                    } else {
                        $('.navbar-default').removeClass('sticky');
                    }
                });
            }); 



            //function to deal with smoothscroll for #anchors
            $('a[href*="#"]').on('click', function (e) {
                e.preventDefault();

                //remove the anchor from the url
                var uri = window.location.toString();
                if (uri.indexOf("#") > 0) {
                    var clean_uri = uri.substring(0, uri.indexOf("#"));
                    window.history.replaceState({}, document.title, clean_uri);
                }

                // smooth scroll 
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 500, 'linear');
            }); 

        </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>        
    </body>
</html>
