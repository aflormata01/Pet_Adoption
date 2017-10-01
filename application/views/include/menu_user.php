<nav class="navbar navbar-default">
  <div class="container search">
    <div class="navbar-header menupad">
      <a class="navbar-brand" href=""><img src="<?php echo base_url('assets/images/fulllogo.png'); ?>" /></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="menupad"><a class="u" href="<?php echo base_url('user')?>">HOME</a></li>
	  <li class="menupad"><a class="u" href="<?php echo base_url('user/userpetcatalogue')?>">PET CATALOGUE</a></li>
	  <li class="dropdown menupad">
        <a class="u" class="dropdown-toggle" data-toggle="dropdown" href="#">COMMUNITY
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="menupad"><a href="<?php echo base_url('user/userstories')?>">SUCCESS STORIES</a></li>
          <li class="menupad"><a href="<?php echo base_url('user/userdiscussion')?>">DICUSSIONS</a></li>
        </ul>
      </li>
      <li class="dropdown menupad">
        <a class="u" class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS AND EVENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="menupad"><a href="<?php echo base_url('user/news')?>">NEWS</a></li>
          <li class="menupad"><a href="#">UPCOMING EVENTS</a></li>
        </ul>
      </li>
      <li class="menupad"><a class="u" href="<?php echo base_url('user/faqs')?>">FAQ's</a></li>  
      <li class="dropdown menupad">
        <a class="u" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><span class="caret"></span></span></a>
        <ul class="dropdown-menu table-hover">
          <li class="menupad "><a href="<?php echo base_url('user/profile')?>">Your Profile</a></li>
          <li class="menupad "><a href="<?php echo base_url('user/signup')?>">Settings</a></li>
		  <li class="menupad "><a href="<?php echo base_url('logout')?>">Logout</a></li>
        </ul>
      </li> 
	  
	  
	  
    </ul>
  </div>
</nav>