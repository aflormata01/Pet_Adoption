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
          <a class="menupad"><a href="<?php echo base_url('peternity/discussion')?>" class="sm">DICUSSIONS&nbsp;&nbsp;&nbsp; </a></a><br/>
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
	  
		<li class="menupad"><a class="sm" href="<?php echo base_url('peternity/signup')?>" style="text-decoration:none" data-toggle="modal" data-target="#myModal">ADOPT A PET!</a></li>   

				<div id="table">
			<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
	</div>

  </div>
</nav>	