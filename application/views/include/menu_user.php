<nav class="navbar navbar-default">
  <div class="container search">
    <div class="navbar-header userpad">
      <a class="navbar-brand" href=""><img src="<?php echo base_url('assets/images/logo.png'); ?>" /></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="userpad"><a class="sm" href="<?php echo base_url('user')?>">HOME</a></li>
	  <li class="userpad"><a class="sm" href="<?php echo base_url('user/petcatalogue')?>">PET CATALOGUE</a></li>
	  <li class="dropdown userpad">
        <a class="sm" class="dropdown-toggle" data-toggle="dropdown" href="#">COMMUNITY
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="userpad"><a href="<?php echo base_url('user/userstories/'.$user.'')?>" class="sm">SUCCESS STORIES</a></li>
          <li class="userpad"><a href="<?php echo base_url('user/userdiscussion/'.$user.'')?>" class="sm">DICUSSIONS</a></li>
        </ul>
      </li>
      <li class="dropdown userpad">
        <a class="sm" class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS AND EVENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="userpad"><a href="<?php echo base_url('user/news/')?>" class="sm">NEWS</a></li>
          <li class="userpad"><a href="<?php echo base_url('user/upcomingevents/')?>" class="sm">UPCOMING EVENTS</a></li>
        </ul>
      </li>
      <li class="userpad"><a class="sm" href="<?php echo base_url('user/faqs/')?>">FAQ's</a></li>  
      <li class="dropdown userpad">
        <a class="sm" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><span class="caret"></span></span></a>
        <ul class="dropdown-menu table-hover">
          <li class="sm"><a href="<?php echo base_url('user/profile/'.$user.'')?>">Your Profile</a></li>
          <li class="sm"><a href="<?php echo base_url('user/setting/'.$user.'')?>">Settings</a></li>
		  <li class="sm"><a href="<?php echo base_url('logout');?>">Logout</a></li>
        </ul>
      </li>
	  
	  
	  
    </ul>
  </div>
</nav>