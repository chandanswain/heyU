<div class="backdrop"></div>
<nav class="header navbar-fixed-top">
    <div class="navbar-header1">
        <div class="col-md-2"><a href="index.php">
                <div class="logo2"><img src="{{asset('assets/images/logo.png')}}"/></div>
            </a></div>

        <div class="col-md-4 friends1">
            <ul class="friends">
                <li><a href="#" title="friend request"><img src="{{asset('assets/images/friends.png')}}"/></a></li>
                <li><a href="#" title="message"><img src="{{asset('assets/images/cht.png')}}"/></a></li>
                <li><a href="#" title="notification"><img src="{{asset('assets/images/blb.png')}}"/></a></li>
                <li>&nbsp; | &nbsp;<a href="#"><img src="{{asset('assets/images/fr.png')}}"/></a>&nbsp; | &nbsp; </li>
            </ul>
        </div>

        <div class="col-md-2">
            <ul class="pro">
                <!--<li class="time">
          <?php
                date_default_timezone_set('Asia/Kolkata');
                $currentDateTime = date('m/d/Y H:i:s');
                $newDateTime = date('h:i A', strtotime($currentDateTime));
                echo $newDateTime;
                ?>
        </li>-->

                <li>
                    <a href="#" title="profile"><img src="{{asset('assets/images/default-profile.png')}}" style="width: 31px;height: auto;" />
                    </a> {{Session::get('first_name')}}
                </li>
                <li class="clickin"><a href="#"><img src="{{asset('assets/images/arrow.png')}}"/></a></li>
            </ul>
        </div>
        <div class="col-md-4 searchbox1">
            <form>
                <input type="text" name="search" placeholder="Search..">
                <button type="submit" form="form1" value="Submit"><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="creatpage">
        <div class="toppungi"></div>
        <ul>
            <li><a href="javascript:void(0);">Setting</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>
</nav>
</div>
<div class="chatbox">
    <ul class="headchat">
        <li><a href="#">Neeraj Pandey </a></li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="add more friend to chat"><i class="fa fa-plus"
                                                                                         aria-hidden="true"></i></a>
        </li>
        <li><a href="#" title="Video"><i class="fa fa-video-camera" aria-hidden="true" style="color:#fff;"></i></a></li>
        <li><a href="#" title="Call"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
        <li><a href="#" title="option"><i class="fa fa-filter" aria-hidden="true"></i></a></li>
        <li class="close"><a href="#" title="close">X</a></li>
    </ul>
    <ul class="letastchat">
        <li><a href="#"><img src="{{asset('assets/images/chatpic.jpg')}}"/></a>&nbsp;&nbsp;&nbsp;<span class="chatupdate1">Hi kya hal hai bhai</span>
        </li>
    </ul>
    <form>
        <input type="text" name="fname" style=" background: #ffffff none repeat scroll 0 0;
    border: 1px solid #9a9a9a;
    height: 33px;
    margin-left: 7px;
    padding: 0 0 0 1px;
    width: 96%;" placeholder="Type a Message...">
    </form>
</div>
<div class="col-md-10 clickshowpic">
    <div class="closepop"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2>All Images</h2>
    <ul class="picksprayyy">
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
    </ul>
</div>

<div class="col-md-10 clickshowpic2">
    <div class="closepop"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2>Follows</h2>

    <div class="col-md-12 fol">
        <div class="col-md-7 followsimg"><img src="{{asset('assets/images/pickspre.jpg')}}"/></div>
        <div class="col-md-5 followscon"><h4>Follows</h4></div>
    </div>
    <div class="col-md-12 fol">
        <div class="col-md-7 followsimg"><img src="{{asset('assets/images/pickspre.jpg')}}"/></div>
        <div class="col-md-5 followscon"><h4>Follows</h4></div>
    </div>
</div>

<div class="col-md-10 clickshowpic3">
    <div class="closepop"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2>All Images</h2>
    <ul class="picksprayyy">
        <li><img src="{{asset('assets/images/pickspre.jpg')}}"/></li>
    </ul>
</div>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script>
    $(document).ready(function () {
//alert('kkkk');
        $('.clickin').click(function () {
            $('.creatpage').toggle();
        });
        $('.readmore12').click(function () {
            $('.display22').toggle();
        });
        $('.chatopen').click(function () {
            $('.chatbox').fadeIn();
        });

        $('.clickprofile').click(function () {
            $('.notshow').toggle();
        });

        $('.closeside').click(function () {
            $('.notshow').hide();
        });
        $('li.close').click(function () {
            $(this).parent().parent().fadeOut();
        });


        $('.friendslistsidebar .heading').click(function () { //alert('kkkk');
            $('#friendslists').click();
        });

        $('.photosidebar .heading').click(function () { //alert('kkkk');
            $('#photolists').click();
        });

//piskpre;
        $(".myButton").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic').show('slide', options, 500);
            $('.backdrop').show();
        });

        $(".myButton2").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic2').show('slide', options, 500);
            $('.backdrop').show();
        });

        $(".myButton3").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic3').show('slide', options, 500);
            $('.backdrop').show();
        });

        $(".myButton3").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic3').show('slide', options, 500);
            $('.backdrop').show();
        });

        $(".closepop").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic').hide('slide', options, 500);
            $('.backdrop').hide();
        });
        $(".closepop").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic2').hide('slide', options, 500);
            $('.backdrop').hide();
        });
        $(".backdrop").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic2').hide('slide', options, 500);
            $('.clickshowpic').hide();
            $(this).hide();
        });


        $(".backdrop").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic3').hide('slide', options, 500);
            $('.clickshowpic').hide();
            $(this).hide();
        });

        $(".closepop").click(function () {
            var options = {direction: 'right'};
            $('.clickshowpic3').hide('slide', options, 500);
            $('.backdrop').hide();
        });
    });
</script>
<script>
    $(function () {
        //alert('fffffff');
        $("#accordion").accordion();
    });

    $(function () {
        $("#accordion1").accordion();
    });

    $(function () {
        $("#accordion2").accordion();
    });
</script>