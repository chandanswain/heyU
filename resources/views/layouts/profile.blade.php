<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>heyU</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nstyle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato"/>
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
</head>
<body>

@include('layouts.home.header');
@include('layouts.profile.sidebar');

<div class="col-md-7 cover">
    <div class="coverphoto">
        <ul class="topmenu">
            <li class="active"><a href="#">Timeline</a></li>
            <li class="aboutnew1"><a href="#about">About</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="#">Photos</a></li>
            <li class="readmore12"><a href="#">More <i aria-hidden="true" class="fa fa-caret-down fa-lg"></i></a></li>
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


    <div class="col-md-9 timeline top">
        <div id="accordion">
            <h3>Timeline <i aria-hidden="true" class="fa fa-sort-desc" style="height:auto;"></i></h3>

            <div>
                <div class="col-md-12 top topnew12">
                    <div class="col-md-2 postsmallimage profileimg"><img src="{{asset('assets/images/uploprofile.jpg')}}"/></div>
                    <div class="col-md-10 upbackground">
                        <p class="nameheading">Neeraj Pandey</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="newuploadeimage"><img src="{{asset('assets/images/chandan-new.jpg')}}"/>
                            <ul class="likethis vv">
                                <li><a href="#"> <i class="fa fa-star-o" aria-hidden="true"></i> Me Too</a></li>
                                <li><a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> Comment</a></li>
                                <li><a href="#"> <i class="fa fa-share" aria-hidden="true"></i> Share</a></li>
                            </ul>
                            <div class="clearfix"></div>
                            <ul class="likethis meeto">
                                <li class="leftnew"><a> 293 Me Too</a></li>
                                <li> <a>30 Share</a></li>
                                <li><a> 300 Comment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10 comment12">
                        <form>
                            <input type="text" placeholder="Write Your Comment..."
                                   style=" background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: 1px solid #9a9a9a; height: 33px; width: 100%;"
                                   name="fname">
                        </form>
                    </div>
                </div>
                <div class="col-md-12 top topnew12">
                    <div class="col-md-2 postsmallimage profileimg"><img src="{{asset('assets/images/uploprofile.jpg')}}"/></div>
                    <div class="col-md-10 upbackground">
                        <p class="nameheading">Neeraj Pandey</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="newuploadeimage"><img src="{{asset('assets/images/chandan-new.jpg')}}"/>
                            <ul class="likethis vv">
                                <li><a href="#"> <i class="fa fa-star-o" aria-hidden="true"></i> Me Too</a></li>
                                <li><a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> Comment</a></li>
                                <li><a href="#"> <i class="fa fa-share" aria-hidden="true"></i> Share</a></li>
                            </ul>
                            <div class="clearfix"></div>
                            <ul class="likethis meeto">
                                <li class="leftnew"> <a>293 Me Too</a></li>
                                <li> <a>30 Share</a></li>
                                <li> <a>300 Comment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10 comment12">
                        <form>
                            <input type="text" placeholder="Write Your Comment..."
                                   style=" background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: 1px solid #9a9a9a; height: 33px; width: 100%;"
                                   name="fname">
                        </form>
                        <ul class="commentandrecomment">
                            <li><img src="{{asset('assets/images/commentnew.jpg')}}"/> Amit Sinha <span class="hrs">8hrs ago</span></li>
                            <li class="replylest"><img src="{{asset('assets/images/commentnew.jpg')}}"/> Amit Sinha</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 id="abotopen">About <span><i aria-hidden="true" class="fa fa-sort-desc"></i></span></h3>

            <div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
                    <li><a data-toggle="tab" href="#menu1">Work and Education</a></li>
                    <li><a data-toggle="tab" href="#menu2">Places You've Lived</a></li>
                    <li><a data-toggle="tab" href="#menu3">Contact and Basic Info</a></li>
                    <!--<li><a data-toggle="tab" href="#menu4">Family and Relationships</a></li>-->
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="col-md-12 top">
                            <div class="col-md-7">
                                <ul class="work">
                                    <li><a href="#"><img src="{{asset('assets/images/aa.jpg')}}"/> Senior Web Designer at ap webworld</a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('assets/images/aa.jpg')}}"/> Senior Web Designer at ap webworld</a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('assets/images/aa.jpg')}}"/> Senior Web Designer at ap webworld</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 top">
                                <ul class="addr">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> 088096 98583 , 098914 60453</li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> A 446 jaitpur ext badarpur
                                        New Delhi
                                    </li>
                                    <li><i class="fa fa-crosshairs" aria-hidden="true"></i> Neeraj PAndey</li>
                                    <li><i class="fa fa-birthday-cake" aria-hidden="true"></i> 11-11-1992</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="col-md-12 top">
                            <ul class="workad">
                                <li><a href="#"><IMG src="{{asset('assets/images/aa.jpg')}}"/><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{asset('assets/images/aa.jpg')}}"/><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{asset('assets/images/aa.jpg')}}"/><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="col-md-12 top">
                            <ul class="workad">
                                <li><a href="#"><IMG src="{{asset('assets/images/aa.jpg')}}"/><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{asset('assets/images/aa.jpg')}}"/><span> &nbsp; Ap Web World</span><br>
                                        Senior Web Designer · New Delhi, India </a></li>
                                <li><a href="#"><IMG src="{{asset('assets/images/aa.jpg')}}"/><span> &nbsp; Ap Web World</span><br>
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
                </div>
            </div>
            <h3 id="friendslists">Friends <i aria-hidden="true" class="fa fa-sort-desc"></i></h3>

            <div>
                <div class="col-md-12 top">
                    <div class="col-md-12 friendsnew">
                        <ul class="friendslist">
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                            <li><a href="#"><img src="{{asset('assets/images/friends1.jpg')}}"/><span> Neeraj Pandey</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 id="photolists">Photos <i aria-hidden="true" class="fa fa-sort-desc"></i></h3>

            <div>
                <div class="col-md-12 galery top">
                    <ul class="galleryimage">
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                        <li class="photo"><a href="#"><img src="{{asset('assets/img/1.jpg')}}"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 profile">
        @include('layouts.latest_updates');
    </div>
</div>
@include('layouts.home.right_sidebar');

<script src="{{asset('assets/js/sidebar.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
