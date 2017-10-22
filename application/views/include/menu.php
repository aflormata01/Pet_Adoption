  <style>

.dropdown {
    position: relative;
    display: inline-block;
	background-color: #ffcab2;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffcab2;
    z-index: 1;
}

.dropdown-content a {
    padding: 5px 2px 5px 2px;
    text-decoration: none;
    display: block;
	background-color: #ffcab2;
}

.dropdown-content a:hover {
	text-decoration: none;
	background-color: #ccffea;
	
}

.dropdown:hover .dropdown-content {
    display: block;
}


</style>
<nav class="navbar">
  <div class="container">
    <div class="navbar-header menupad">
      <a class="navbar-brand" href="<?php echo base_url('user')?>""><img src="<?php echo base_url('assets/images/logo.png'); ?>" /></a>
    </div>
    <ul class="nav navbar-nav show-on-hover">
      <li class="menupad "><a class="sm" href="<?php echo base_url('user')?>">HOME</a></li>
	  
	  <li class="menupad"><a class="sm" href="<?php echo base_url('peternity/rescuepet')?>">PET CATALOGUE</a></li>
	  <li class="dropdown menupad">
        <a class="sm" class="dropdown-toggle" data-toggle="dropdown" href="#">COMMUNITY</a>
        <ul class="dropdown-content ">
          <a class="menupad"><a href="<?php echo base_url('peternity/discussion')?>" class="sm">DICUSSIONS&nbsp;&nbsp;&nbsp; </a></a>
        </ul>
      </li>
      <li class="dropdown menupad ">
        <a class="sm" class="dropdown-toggle" data-toggle="dropdown" href="#">NEWS AND EVENTS</a>
        <ul class="dropdown-content ">
          <a class="menupad"><a href="<?php echo base_url('peternity/news')?>" class="sm">NEWS&nbsp;&nbsp;&nbsp; </a></a>
          <a class="menupad"><a href="<?php echo base_url('peternity/upcomingevents')?>" class="sm">UPCOMING EVENTS &nbsp;&nbsp;&nbsp;</a></a>
        </ul>
      </li>
      <li class="menupad"><a class="sm" href="<?php echo base_url('peternity/faqs')?>">FAQ's</a></li>   
	  
		<li class="menupad"><a class="sm" href="<?php echo base_url('peternity/steps')?>">ADOPT A PET!</a></li>   
		<li class="menupad"><a class="sm" href="<?php echo base_url('login_admin')?>">ADMIN</a></li>   
	
	  
	  
   
  </div>
</nav>	