
    <div class="side-menu">
    
    <nav class="navbar " role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand nav" href="#">
                   <img src="<?php echo base_url('assets/images/logo.png')?>" class="img-responsive" style="padding-bottom: 50px;" />
			<br/>
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn " id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                  <a href="<?php echo base_url('admin')?>"><i class="fa fa-paw"></i>PETS</a>
                </li>
				
            <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="<?php echo base_url('admin/adminnews')?>"><i class="fa fa-globe fa-lg"></i> NEWS</span></a>
                </li> 
				
            <li>
                  <a href="<?php echo base_url('admin/adminevents')?>">
                  <i class="fa fa-calendar fa-lg"></i> EVENTS
                  </a>
                </li>
				
				<li>
                  <a href="<?php echo base_url('admin/adminfaq')?>">
                  <i class="fa fa-question fa-lg"></i> FAQS
                  </a>
                </li>
				
				<li>
                  <a href="<?php echo base_url('admin/adminusers')?>">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>
				
				<li>
                  <a href="<?php echo base_url('admin/adminmessage')?>">
                  <i class="fa fa-envelope fa-lg"></i> Messages
                  </a>
                </li>
				
				<li>
                  <a href="<?php echo base_url('Logout')?>">
                  <i class="glyphicon glyphicon-off"></i>Logout
                  </a>
                  </li>
				  
	

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
    
    </div>

    

<script>$(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});</script>