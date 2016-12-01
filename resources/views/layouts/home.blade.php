<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>heyU</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nstyle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <style>
        .post_type{
            background-color: #449d44;color: #fff;padding: 3px 5px;border: 1px solid #449d44;border-radius: 4px;
        }
        .rightaline .btn-success{height: 25px;width:70px;}
    </style>
</head>
<body>
@include('layouts.home.header');
@include('layouts.home.sidebar');


<div class="col-md-5 topspacing homecover">

    {!! Form::open(['url' => '', 'method' => 'post', 'id'=>'post_form','files' => true])!!}
    <div class="col-md-12 uploadthis">
        <div class="col-md-2 comment1">
            <div class="comment">
                <ul commenticon>
                    <li><a href="javascript:void(0);"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0);" id="image_upload"><i class="fa fa-camera fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 padingnot">
            <textarea class="textarea12" name="post_text"  placeholder="Share Your Status..."></textarea>
        </div>
        <div class="col-md-12 views1">
            <ul class="viewseaction">
                <li><a href="javascript:void(0);"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0);"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0);"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
                <li class="rightaline">
                    <button class="btn btn-success" id="publish_post" type="button">Publish</button>
                </li>
                <li class="rightaline">
                    <div class="dropdown">
                        <?php
                            $visibilityArray = [];
                            if($VisibilityList->count() > 0) :
                                foreach($VisibilityList as $visibility):
                                    $selectedVisibility = ($visibility->name=='public') ? $visibility->visibility_id : 1;
                                    $visibilityArray[$visibility->visibility_id] = $visibility->name;
                                endforeach;
                            endif;
                        ?>
                       <?php  echo Form::select('post_type', $visibilityArray,$selectedVisibility,array('name' => 'post_type','class' => 'post_type') ); ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <input type="file" name="profile_image" id="profile_image" style="display: none;">
    {!! Form::close() !!}

    <div id="new_post">

    </div>
    {{--<div class="col-md-12 top topnew12">
        <div class="col-md-2 postsmallimage"> <img src="{{asset('assets/images/default-profile.png')}}" /> </div>
        <div class="col-md-10 upbackground">
            <p class="nameheading">Neeraj Pandey</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="newuploadeimage"> <img src="{{asset('assets/images/chandan-new.jpg')}}" />
                <ul class="likethis vv">
                    <li><a href="javascript:void(0);"> <i class="fa fa-star-o" aria-hidden="true"></i> Me Too</a></li>
                    <li><a href="javascript:void(0);"> <i class="fa fa-comment-o" aria-hidden="true"></i> Comment</a></li>
                    <li><a href="javascript:void(0);"> <i class="fa fa-share" aria-hidden="true"></i> Share</a></li>
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
                <input type="text" placeholder="Write Your Comment..." style=" background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: 1px solid #9a9a9a; height: 33px; width: 100%;" name="fname">
        </div>
    </div>--}}


</div>
<div class="col-md-3 topspacinginside jjjj">
    @include('layouts.latest_updates');
</div>
@include('layouts.home.right_sidebar');

<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/sidebar.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function() {

        $("body").niceScroll();

        $("#boxscroll").niceScroll("#boxscroll",{touchbehavior:true});

        $(document).on('click','#publish_post',function(e){
            e.preventDefault();

            $.ajax({
                url: './home/savePost',
                headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
                data:{formData : $("#post_form").serialize()},
                type: 'POST',
                success: function (resp) {
                    $myPost = '';
                    console.log(resp);
                    console.log(resp.data.post);
                    if(resp.msg){
                        $myPost +='<div class="col-md-12 top topnew12">';
                        $myPost +='<div class="col-md-2 postsmallimage"> <img src="{{asset('assets/images/default-profile.png')}}" /> </div>';
                        $myPost +='<div class="col-md-10 upbackground">';
                        $myPost +='<p class="nameheading">{{ucfirst(Session::get('first_name'))}} {{ucfirst(Session::get('last_name'))}}</p>';
                        $myPost +='<p>'+resp.data.post+'</p>';
                        $myPost +='<div class="newuploadeimage"> <img src="{{asset('assets/images/chandan-new.jpg')}}" />';
                        $myPost +='<ul class="likethis vv">';
                        $myPost +='<li><a href="javascript:void(0);"> <i class="fa fa-star-o" aria-hidden="true"></i> Me Too</a></li>';
                        $myPost +='<li><a href="javascript:void(0);"> <i class="fa fa-comment-o" aria-hidden="true"></i> Comment</a></li>';
                        $myPost +='<li><a href="javascript:void(0);"> <i class="fa fa-share" aria-hidden="true"></i> Share</a></li>';
                        $myPost +='</ul>';
                        $myPost +='<div class="clearfix"></div>';
                        $myPost +='<ul class="likethis meeto">';
                        $myPost +='<li class="leftnew"> <a>293 Me Too</a></li>';
                        $myPost +='<li> <a>30 Share</a></li>';
                        $myPost +='<li> <a>300 Comment</a></li>';
                        $myPost +='</ul>';
                        $myPost +='</div>';
                        $myPost +='</div>';
                        $myPost +='<div class="col-md-10 comment12">';
                        $myPost +='<input type="text" placeholder="Write Your Comment..." style=" background: rgba(0, 0, 0, 0) none repeat scroll 0 0; border: 1px solid #9a9a9a; height: 33px; width: 100%;" name="fname">';
                        $myPost +='</div>';
                        $myPost +='</div>';
                    }
                    $("#new_post").prepend($myPost).fadeIn('slow');
                }
            });
        });

        $(document).on('click','#image_upload',function(){
            $("#profile_image").trigger('click');
        });

    });
</script>
</body>
</html>
