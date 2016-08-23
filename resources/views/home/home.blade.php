@extends('layouts.home')

@section('content')

    <div class="col-sm-3">
        <div class="shadow bg-color-lightg marginTop6 padding10">
            <div class="left-nav-profilePic pull-left"><img src="{{ asset('assets/img/DSCF2768.JPG') }}"></div>
            <div class="pull-left marginLeft10">
                <span>Atul Yadav</span>
                <span>250 Friends 4 Trips</span>
                <span> 543 Vedios 2453 Images</span>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="shadow bg-color-lightg marginTop6">
            <h4 class="box-header">Favorites</h4>
            <ul class="quick-links padding10">
                <li><a href="#">dfdfsffs</a></li>
                <li><a href="#">dfdfsffs</a></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-5">
        <!-- publish Area start-->
        <div class="publish-post publish-panel white-bg shadow marginTop6">
            <div class="col-sm-2">
                <ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#tab1" data-toggle="tab">S</a></li>
                    <li><a href="#tab2" data-toggle="tab">Pho</a></li>
                    <li><a href="#tab3" data-toggle="tab">Al</a></li>
                </ul>
            </div>
            <div class="col-sm-10 pulishAA">
                <div class="tab-content">
                    <div class="tab-pane active in" id="tab1">
                        <textarea class="whatsU marginTop6" placeholder="Whats on your mind?"></textarea>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div>
                            <input type="file" />Upload Photos/Video</div>
                    </div>
                    <div class="tab-pane fade" id="tab3">

                        <div>
                            <input type="file" /> Create Photo Album</div>
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <div class="publish-post-footer bg-color-lightg displayBlock overFlowhdn padding10">
                <button type="button" class="btn btn-success btn-xs pull-right marginLeft10 publish-btn">Publish</button>
                <select class="selectpicker pull-right">
                    <option>Public</option>
                    <option>Friends</option>
                    <option>Me</option>
                </select>

            </div>
        </div>
        <!-- publish Area End-->

        <!-- Feeds start-->
        <div class="marginTop6 feed">
            <div class="col-sm-2 marginTop6">
                <div class="postImg"><img src="{{ asset('assets/img/DSCF2768.JPG') }}"></div>
            </div>
            <div class="col-sm-10 white-bg shadow marginTop6">
                <div class="panel-heading bg-color-lightg">
                    Atul Yadav
                </div>
                <p class="padding10">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                <a class="feedImg">
                    <img src="{{ asset('assets/img/DSCF2768.JPG') }}">
                </a>
                <div class="col-sm-12">
                    <div>
                        <div class="col-sm-4">a</div>
                        <div class="col-sm-4">a</div>
                        <div class="col-sm-4">a</div>
                    </div>
                    <div class="btn-group btn-group-justified">
                        <a href="#" class="btn btn-default">Star</a>
                        <a href="#" class="btn btn-default">Comment</a>
                        <a href="#" class="btn btn-default">Share</a>
                    </div>
                </div>
                <div class="clear"></div>

                <!-- comment start-->
                <div class="bg-color-lightg padding10 marginTop6">
                    <div class="comments-list">
                        <div class="media">
                            <p class="pull-right"><small>5 days ago</small></p>
                            <a class="media-left commentimg" href="#">
                                <img src="{{ asset('assets/img/DSCF2768.JPG') }}">
                            </a>
                            <div class="media-body">

                                <h5 class="media-heading user_name blueText">Amit Sinha</h5>
                                <p>Wow! this is really great.</p>

                                <p>25 <a href="">Star</a> - <a href="">Reply</a></p>

                                <div class="marginTop6">
                                    <div class="media">
                                        <p class="pull-right"><small>5 days ago</small></p>
                                        <a class="media-left commentimg" href="#">
                                            <img src="{{ asset('assets/img/DSCF2768.JPG') }}">
                                        </a>
                                        <div class="media-body">

                                            <h5 class="media-heading user_name blueText">Amit Sinha</h5>
                                            <p>Wow! this is really great.</p>

                                            <p>25 <a href="">Star</a> - <a href="">Reply</a></p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- comment end-->

                <div class="padding5">
                    <div class="comment-Btmimg  col-sm-2">
                        <img src="{{ asset('assets/img/DSCF2768.JPG') }}">
                    </div>
                    <div class="col-sm-8">
                        <textarea class="comment-textareaCss " placeholder="Write your comment"></textarea>
                    </div>
                    <div><a>img Attached</a></div>
                </div>


            </div>
        </div>
        <!-- Feeds End-->
    </div>
    <div class="col-sm-3">
        <div id="css-trending" class="shadow white-bg marginTop6">
            <h4 class="box-header">Trending</h4>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            </ul>

            <div class="tab-content padding5">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Some content.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
            </div>


        </div>
    </div>
    <div class="col-sm-1">

        <ul class="onln-users">
            <li>
                <span class="status"></span>
                <span class="userimg-outer"><img src="{{ asset('assets/img/DSCF2768.JPG') }}"></span>
            </li>
        </ul>
    </div>
@endsection
