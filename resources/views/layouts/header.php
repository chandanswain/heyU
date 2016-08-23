<nav class="header navbar-fixed-top">
 
    <div class="navbar-header1"> 
  
    <div class="col-md-2"><a href="index.php"><div class="logo2"><img src="images/logo.png" /></div></a> </div>
    <div class="col-md-2 friends1">
   <ul class="friends">
   <li><a href="#" title="friend request"><img src="images/friends.png" /></a></li>
   <li><a href="#" title="message"><img src="images/cht.png" /></a></li>
   <li><a href="#" title="notification"><img src="images/blb.png" /></a></li> 
   
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
    <li>&nbsp; | &nbsp;<a href="#"><img src="images/fr.png" /></a>&nbsp; | &nbsp; </li>
   <li><a href="#" title="profile"><img src="images/profile.jpg" /></a></li> 
   <li class="clickin"><a href="#"><img src="images/arrow.png" /></a></li> 
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
<li><a href="#"><img src="images/chatpic.jpg" /></a>&nbsp;&nbsp;&nbsp;<span class="chatupdate1">Hi kya hal hai bhai</span></li>
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