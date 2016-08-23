<!DOCTYPE html>
{{--<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>heyU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app1.css')}}">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{ asset('assets/img/inner-page-logo.png') }}" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="col-md-4 marginTop6">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control searchText" placeholder="Search for snippets" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn searchBtn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle pull-left" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="glyphicon userDroplistimg pull-left">
                        <img src="{{ asset('assets/img/DSCF2768.JPG') }}" >
                    </span>
                    <span class="pull-left marginLeft10 marginTop6">{{ Auth::user()->first_name }}<span class="caret"></span>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-cart" role="menu">
                    <li><a href="{{ url('/logout') }}">Log Out</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-collapse -->
    </div>
</nav>


<div class="container-fluid">
    @yield('content')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>--}}


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->
    <title>heyU</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nstyle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fonts/awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <style>
        .header {
            background: rgba(0, 0, 0, 0) url("{{ asset('assets/images/header.jpg') }}") repeat scroll 0 0;
        }
    </style>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
</head>
<body>
<nav class="header navbar-fixed-top">

    <div class="navbar-header1">

        <div class="col-md-2"><a href="index.php"><div class="logo2"><img src="{{ asset('assets/images/logo.png') }}" /></div></a> </div>
        <div class="col-md-2 friends1">
            <ul class="friends">
                <li><a href="#" title="friend request"><img src="{{ asset('assets/images/friends.png') }}" /></a></li>
                <li><a href="#" title="message"><img src="{{ asset('assets/images/cht.png') }}" /></a></li>
                <li><a href="#" title="notification"><img src="{{ asset('assets/images/blb.png') }}" /></a></li>

            </ul>
        </div>
        <div class="col-md-4 searchbox1">
            <form><input type="text" name="search" placeholder="Search..">
                <button type="submit" form="form1" value="Submit"> <i class="fa fa-search" aria-hidden="true"></i></button>
            </form>

        </div>


        <div class="col-md-3">
            <ul class="pro">
                <li class="time"><?php
                    date_default_timezone_set('Asia/Kolkata');
                    $currentDateTime=date('m/d/Y H:i:s');
                    $newDateTime = date('h:i A', strtotime($currentDateTime));
                    echo $newDateTime;
                    ?></li>
                <li>&nbsp; | &nbsp;<a href="#"><img src="{{ asset('assets/images/fr.png') }}" /></a>&nbsp; | &nbsp; </li>
                <li><a href="#" title="profile"><img src="{{ asset('assets/images/profile.jpg') }}" /></a></li>
                <li class="clickin"><a href="#"><img src="{{ asset('assets/images/arrow.png') }}" /></a></li>
            </ul>
        </div>



    </div>
    <div class="creatpage">
        <div class="toppungi"></div>
        <ul>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Create Group</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Create Group</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Create Group</a></li>
        </ul>
    </div>
</nav>


</div>
<div class="chatbox">
    <ul class="headchat">
        <li><a href="#">Neeraj Pandey </a></li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="add more friend to chat"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
        <li><a href="#" title="Video"><i class="fa fa-video-camera" aria-hidden="true"style="color:#fff;"></i></a></li>
        <li><a href="#" title="Call"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
        <li><a href="#" title="option"><i class="fa fa-filter" aria-hidden="true"></i></a></li>
        <li class="close"><a href="#" title="close"><i class="fa fa-times" aria-hidden="true"></i></a></li>

    </ul>
    <ul class="letastchat">
        <li><a href="#"><img src="{{ asset('assets/images/chatpic.jpg') }}" /></a>&nbsp;&nbsp;&nbsp;<span class="chatupdate1">Hi kya hal hai bhai</span></li>
    </ul>
    <form><input type="text" name="fname" style=" background: #ffffff none repeat scroll 0 0;
    border: 1px solid #9a9a9a;
    height: 33px;
    margin-left: 7px;
    padding: 0 0 0 1px;
    width: 96%;" placeholder="Type a Message..."></form>
</div>

<script src="js/jquery.min.js"></script><script>
    $( document ).ready(function() {
//alert('kkkk');
        $('.clickin').click(function(){
            $('.creatpage').slideToggle(400);
        });
        $('.readmore12').click(function(){
            $('.display22').slideToggle(400);
        });
        $('.chatopen').click(function(){
            $('.chatbox').fadeIn(400);
        });

        $('.clickprofile').click(function(){
            $('.notshow').show(800);
        });

        $('.closeside').click(function(){
            $('.notshow').hide(500);
        });
        $('li.close').click(function(){
            $(this).parent().parent().fadeOut(400);
        });


        $('.friendslistsidebar .heading').click(function(){ //alert('kkkk');
            $('#friendslists').click();
        });

        $('.photosidebar .heading').click(function(){ //alert('kkkk');
            $('#photolists').click();
        });



    });
</script>

<div class="col-md-2 topinsidebar">
    <div class="sidebarfirst">
        <div id="hoeapp-container" hoe-color-type="lpanel-bg2" hoe-lpanel-effect="shrink">
            <aside id="hoe-left-panel" hoe-position-type="absolute">
                <div class="profile-box">
                    <div class="media"> <a class="pull-left clickprofile" href="profile/"> <img class="img-circle" src="{{ asset('assets/images/avatar-1.jpg') }}"> <i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">Neeraj Pandey </span></h5>
                            <small>Edit Profile &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i>
                            </small> </div>
                    </div>
                </div>
                <ul class="nav panel-list notshow">
    <span class="closeside"><i class="fa fa-times" aria-hidden="true"></i>
</span>

                    <li> <a href="javascript:void(0)"> <i class="fa fa-bar-chart"></i> <span class="menu-text">Graphs</span>  <span class="selected"></span> </a> </li>
                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <i class="fa fa-files-o"></i> <span class="menu-text">Other Pages</span> <span class="selected"></span> </a>
                        <ul class="hoe-sub-menu">
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Blank Page</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Login</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">User Profile</span> <span class="label sul">Updated</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Team Member</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Time Line</span> <span class="selected"></span> </a> </li>
                        </ul>
                    </li>
                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <i class="fa fa-envelope-o"></i> <span class="menu-text">Email Templates</span> <span class="selected"></span> </a>
                        <ul class="hoe-sub-menu">
                            <li class="hoe-has-menu"> <a href="javascript:void(0)"> <span class="menu-text">Inbox </span> <span class="selected"></span> </a>
                                <ul class="hoe-sub-menu">
                                    <li> <a href="javascript:void(0)"> <span class="menu-text">Inbox v1</span> <span class="selected"></span> </a> </li>
                                    <li> <a href="javascript:void(0)"> <span class="menu-text">Inbox v2</span> <span class="selected"></span> </a> </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Detail</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Compose</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Send</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Draft</span> <span class="selected"></span> </a> </li>
                        </ul>
                    </li>
                    <li class="nav-level">Components</li>
                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <i class="fa fa-pencil-square-o"></i> <span class="menu-text">UI Elements</span> <span class="selected"></span> </a>
                        <ul class="hoe-sub-menu">
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Icon</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Buttons</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Tabs & Panel</span> <span class="label sul">Updated</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Notification</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Typography</span> <span class="selected"></span> </a> </li>
                        </ul>
                    </li>
                    <li class="nav-level">Components</li>
                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <i class="fa fa-pencil-square-o"></i> <span class="menu-text">UI Elements</span> <span class="selected"></span> </a>
                        <ul class="hoe-sub-menu">
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Icon</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Buttons</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Tabs & Panel</span> <span class="label sul">Updated</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Notification</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Typography</span> <span class="selected"></span> </a> </li>
                        </ul>
                    </li>
                    <li class="nav-level">Components</li>
                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <i class="fa fa-pencil-square-o"></i> <span class="menu-text">UI Elements</span> <span class="selected"></span> </a>
                        <ul class="hoe-sub-menu">
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Icon</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Buttons</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Tabs & Panel</span> <span class="label sul">Updated</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Notification</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Typography</span> <span class="selected"></span> </a> </li>
                        </ul>
                    </li>
                    <li class="nav-level">Components</li>
                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <i class="fa fa-pencil-square-o"></i> <span class="menu-text">UI Elements</span> <span class="selected"></span> </a>
                        <ul class="hoe-sub-menu">
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Icon</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Buttons</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Tabs & Panel</span> <span class="label sul">Updated</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Notification</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">Typography</span> <span class="selected"></span> </a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)"> <i class="fa fa-table"></i> <span class="menu-text">Table</span> <span class="selected"></span> </a> </li>
                    <li class="nav-level">Menu Lavel</li>
                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <i class="fa fa-sitemap"></i> <span class="menu-text">Menu Lavel 1</span> <span class="selected"></span> </a>
                        <ul class="hoe-sub-menu">
                            <li> <a href="javascript:void(0)"> <span class="menu-text">level 2</span> <span class="selected"></span> </a> </li>
                            <li> <a href="javascript:void(0)"> <span class="menu-text">level 2</span> <span class="selected"></span> </a> </li>
                            <li class="hoe-has-menu"> <a href="javascript:void(0)"> <span class="menu-text">level 2</span> <span class="selected"></span> </a>
                                <ul class="hoe-sub-menu">
                                    <li class="hoe-has-menu"> <a href="javascript:void(0)"> <span class="menu-text">level 3</span> <span class="selected"></span> </a>
                                        <ul class="hoe-sub-menu">
                                            <li> <a href="javascript:void(0)"> <span class="menu-text">level 4</span> <span class="selected"></span> </a> </li>
                                            <li> <a href="javascript:void(0)"> <span class="menu-text">level 4</span> <span class="selected"></span> </a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:void(0)"> <span class="menu-text">level 3</span> <span class="selected"></span> </a> </li>
                                    <li> <a href="javascript:void(0)"> <span class="menu-text">level 3</span> <span class="selected"></span> </a> </li>
                                    <li> <a href="javascript:void(0)"> <span class="menu-text">level 3</span> <span class="selected"></span> </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="clearfix"></div>
<div class="tobheader">
    <div class="costomize">
        <p>Coustomize <span><a href="#"><i class="fa fa-sort-desc" aria-hidden="true"></i></a></span></p>
    </div>
    <div class="tending">
        <p>Trending</p>

        <ul>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
        </ul>

    </div>

    <div class="clearfix"></div>


</div>
</div>
<div class="col-md-5 topspacing">
    <div class="col-md-12 uploadthis">

        <div class="col-md-2 comment1">
            <div class="comment">

                <ul commenticon>
                    <li><a href="#"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-camera fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 padingnot">
            <p class="whatsnew">What's new</p>
            <textarea class="textarea12"  placeholder="Share Your Status..."></textarea>
        </div>
        <div class="col-md-12 views1">

            <ul class="viewseaction">
                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 top">
        <div class="col-md-2 postsmallimage">
            <img src="{{ asset('assets/images/uploprofile.jpg') }}" />
        </div>
        <div class="col-md-10 upbackground">
            <p class="nameheading">Neeraj Pandey</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="newuploadeimage">
                <img src="{{ asset('assets/images/bigone.jpg') }}" />
                <ul class="likethis">
                    <li><a href="#">Me Too</a></li>
                    <li><a href="#">Comment</a></li>
                    <li><a href="#">Share</a></li>
                </ul>
            </div>
            <div class="col-md-12 top bordertop">
                <div class="col-md-3 commentimages top">
                    <img src="{{ asset('assets/images/smalluploprofile.jpg') }}" />
                </div>
                <div class="col-md-9 top">
                    <p><a href="#">Neeraj Pandey :-</a> &nbsp; Wow.kya bat hai. Ekdum jhakasss.</p>
                </div>



            </div>

            <div class="col-md-12 top bordertop">
                <div class="col-md-2 commentimages1 top">
                    <img src="{{ asset('assets/images/smalluploprofile.jpg') }}" />
                </div>
                <div class="col-md-10 top">
                    <form> <input type="text" name="fname" style=" background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: 1px solid #9a9a9a; height: 33px; width: 100%;" placeholder="Write Your Comment..."></form>

                </div>



            </div>
        </div>
    </div>

</div>

<div class="col-md-3 topspacinginside">
    <ul class="likeletest">
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
        <li><img src="{{ asset('assets/images/sideimages11.jpg') }}" /> <span class="dis"><strong>neeraj pandey</strong> and H S Yadav Yadav are now friends </span></li>
    </ul>
</div>

<div class="col-md-2 rightsid">
    <div class="whethe"> <img src="{{ asset('assets/images/wether.jpg') }}" /> </div>
    <div class="rightsidebar">
        <ul>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;</li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;</li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;<span class="online">online</span></li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;</li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;<span class="online">online</span></li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;</li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;<span class="online">online</span></li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;</li>
            <li class="chatopen"><img src="{{ asset('assets/images/chet.jpg') }}" />&nbsp; Neeraj Pandey &nbsp;<span class="online">online</span></li>
        </ul>
        </ul>
    </div>
</div>


<script src="{{asset('assets/js/sidebar.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>




