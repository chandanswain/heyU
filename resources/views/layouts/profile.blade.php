<!DOCTYPE html>
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
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <style>
        .header {
            background: rgba(0, 0, 0, 0) url("{{ asset('assets/images/header.jpg') }}") repeat scroll 0 0;
        }
    </style>
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

<script src="{{asset('assets/js/jquery.min.js')}}"></script><script>
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

<div class="col-md-2 sidebarfirst">
    <div id="hoeapp-container" hoe-color-type="lpanel-bg2" hoe-lpanel-effect="shrink">
        <aside id="hoe-left-panel" hoe-position-type="absolute">

            <a href="#">
                <div class="profile-box">
                    <div class="homeprofilepic">
                        <img src="{{ asset('assets/images/homeprofilepic.jpg') }}" />

                    </div>
                    <h4 class="profilename">Neeraj Pandey</h4>
                </div>
            </a>
            <ul class="panel2">
                <li>Senior Web Designer at<a href="#">AP Web World</a></li>
                <li>Studied at<a href="#">J N U Jaipur</a></li>
                <li>Lives in<a href="#">New Delhi, India</a></li>
                <li>Single</li>
                <br />

            </ul>
            <div class="photosidebar">
                <h4 class="heading"><a href="#photolists"><i class="fa fa-picture-o" aria-hidden="true"></i> Phots</a></h4>
                <ul class="sideimages12">
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>


                </ul>
            </div>
            <div class="friendslistsidebar">
                <h4 class="heading"><a href="#friendslists"><i class="fa fa-users" aria-hidden="true"></i>
                        Friends</a></h4>
                <ul class="sideimages12">
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>
                    <li class="photo"><img src="{{ asset('assets/images/sideimages.jpg') }}" /></li>

                </ul>
            </div>

        </aside>
    </div>
</div>


<div class="col-md-8 cover">

    <div class="coverphoto">
        <ul class="topmenu">
            <li class="active"><a href="#">Timeline</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="#">Photos</a></li>
            <li class="readmore12"><a href="#">More <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
        </ul>
        <div class="col-md-2 col-md-offset-5 display22">
            <div class="toppungi"></div>
            <ul class="readmor">
                <li><a href="#">Video</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Video</a></li>

            </ul>
        </div>
    </div>

    <div class="col-md-12 timeline top">
        <div id="accordion">
            <h3>Timeline <i aria-hidden="true" class="fa fa-sort-desc" style="height:auto;"></i></h3>
            <div>
                <div class="col-md-12 top">
                    <div class="col-md-2 postsmallimage"> <img src="{{ asset('assets/images/uploprofile.jpg') }}"> </div>
                    <div class="col-md-10 upbackground">
                        <p class="nameheading">Neeraj Pandey</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="newuploadeimage"> <img src="{{ asset('assets/images/bigone.jpg') }}">
                            <ul class="likethis">
                                <li><a href="#">Me Too</a></li>
                                <li><a href="#">Comment</a></li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 top bordertop">
                            <div class="col-md-3 commentimages top"> <img src="{{ asset('assets/images/smalluploprofile.jpg') }}"> </div>
                            <div class="col-md-9 top">
                                <p><a href="#">Neeraj Pandey :-</a> &nbsp; Wow.kya bat hai. Ekdum jhakasss.</p>
                            </div>
                        </div>
                        <div class="col-md-12 top bordertop">
                            <div class="col-md-2 commentimages1 top"> <img src="{{ asset('assets/images/smalluploprofile.jpg') }}"> </div>
                            <div class="col-md-10 top">
                                <form>
                                    <input type="text" placeholder="Write Your Comment..." style=" background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: 1px solid #9a9a9a; height: 33px; width: 100%;" name="fname">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>About <span><i aria-hidden="true" class="fa fa-sort-desc"></i></span></h3>
            <div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
                    <li><a data-toggle="tab" href="#menu1">Work and Education</a></li>
                    <li><a data-toggle="tab" href="#menu2">Places You've Lived</a></li>
                    <li><a data-toggle="tab" href="#menu3">Contact and Basic Info</a></li>
                    <li><a data-toggle="tab" href="#menu4">Family and Relationships</a></li>

                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="col-md-12 top">
                            <div class="col-md-7">
                                <ul class="work">
                                    <li><a href="#"><img src="{{ asset('assets/images/aa.jpg') }}" /> Senior Web Designer at ap webworld</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/aa.jpg') }}" /> Senior Web Designer at ap webworld</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/aa.jpg') }}" /> Senior Web Designer at ap webworld</a></li>
                                </ul>
                            </div>
                            <div class="col-md-5 top">
                                <ul class="addr">
                                    <li> <i class="fa fa-phone" aria-hidden="true"></i> 088096 98583 , 098914 60453</li>
                                    <li> <i class="fa fa-map-marker" aria-hidden="true"></i> A 446 jaitpur ext badarpur
                                        New Delhi</li>
                                    <li> <i class="fa fa-crosshairs" aria-hidden="true"></i> Neeraj PAndey</li>
                                    <li> <i class="fa fa-birthday-cake" aria-hidden="true"></i> 11-11-1992</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="col-md-12 top">
                            <ul class="workad">
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="col-md-12 top">
                            <ul class="workad">
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="col-md-10  top">
                            <ul class="contactinformation">
                                <li>Mobile Phones <span class="numberver"> 088096 98583</span></li>
                                <li>Mobile Phones <span class="numberver"> 088096 98583</span></li>
                                <li>Address <span class="numberver"> A 446 jaitpur ext badarpur
                  New Delhi, India</span></li>
                                <li>Email <span class="numberver"> niraj.pandey10041993@gmail.com</span></li>
                                <li>Birth Date <span class="numberver"> 11-Nov-1992</span></li>
                                <li>Birth Year <span class="numberver"> 1992</span></li>
                                <li>Languages <span class="numberver"> Hindi , English</span></li>
                            </ul>
                        </div>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <div class="col-md-12 top">
                            <ul class="workad">
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{ asset('assets/images/aa.jpg') }}" /><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h3 id="friendslists">Friends <i aria-hidden="true" class="fa fa-sort-desc"></i></h3>
            <div>
                <div class="col-md-12 top">
                    <div class="col-md-12 friendsnew">
                        <ul class="friendslist">
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/friends1.jpg') }}" /><span> Neeraj Pandey</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 id="photolists">Photos <i aria-hidden="true" class="fa fa-sort-desc"></i></h3>
            <div>
                <div class="col-md-12 galery top">
                    <ul class="galleryimage">
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                        <li class="photo"><a href="#"><img src="{{ asset('assets/img/1.jpg') }}" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
<!--nnnnnnnnnnnnnnnnnnnnn-->

<script src="{{asset('assets/js/sidebar.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script>
    $( function() {
        //alert('fffffff');
        $( "#accordion" ).accordion();
    } );
</script>
</body>
</html>
