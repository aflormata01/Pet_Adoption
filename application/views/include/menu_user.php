  <style>
.dropdown {
    position: relative;
    display: inline-block;

	background-color: #da9b83;

}
.dropdown-content {
    display: none;
    position: absolute;

    background-color:#da9b83;

    z-index: 1;
}
.dropdown-content a {
    padding: 5px 2px 5px 2px;
    text-decoration: none;
    display: block;

	background-color: #da9b83;;

}
.dropdown-content a:hover {
	text-decoration: none;

	background-color: #b1cdda;

	
}
.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<nav class="navbar ">
  <div class="">
    <div class="navbar-header userpad">
      <a class="navbar-brand " href="<?php echo base_url('user')?>" style="margin-left:50px;"><img src="<?php echo base_url('assets/images/logo.png'); ?>" /></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="userpad"><a class="sm" href="<?php echo base_url('user')?>">HOME</a></li>
	  <li class="userpad"><a class="sm" href="<?php echo base_url('user/rescuepet')?>">PET CATALOGUE</a></li>
	  <li class="dropdown userpad">
        <a class="sm" class="dropdown-toggle" data-toggle="dropdown" href="#">COMMUNITY</a>
        <ul class="dropdown-menu table-hover">
          <li ><a href="<?php echo base_url('user/userdiscussion')?>" class="sm">DICUSSIONS</a></li>
        </ul>
      </li>
      <li class="dropdown userpad">
        <a class="sm" class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS AND EVENTS</a>
        <ul class="dropdown-menu table-hover">
          <li ><a href="<?php echo base_url('user/news')?>" class="sm">NEWS</a></li>
          <li ><a href="<?php echo base_url('user/upcomingevents')?>" class="sm">UPCOMING EVENTS</a></li>
        </ul>
      </li>
      <li class="userpad"><a class="sm" href="<?php echo base_url('user/faqs')?>">FAQ's</a></li>  
		
      <li class="dropdown userpad">
        <a class="dropdown-toggle sm" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> USER<span class="caret"></span></a>
        <ul class="dropdown-menu table-hover">
          <li class="sm"><a href="<?php echo base_url('user/profile/'.$user.'')?>">Your Profile</a></li>
          <li class="sm"><a href="<?php echo base_url('user/setting/'.$user.'')?>">Settings</a></li>
		  <li class="sm"><a href="<?php echo base_url('logout');?>">Logout</a></li>
        </ul>
      </li>
	  
	  
	  
    </ul>
  </div>
</nav>