<div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>admin">Cornerstone</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>admin">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit WebContent<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>admin/editwelcomemessage">Welcome Message</a></li>
                <li><a href="<?php echo base_url();?>admin/editourstory">Our Story</a></li>
                <li><a href="<?php echo base_url();?>admin/editourteam">Our Team</a></li>
                <li><a href="<?php echo base_url();?>admin/editourprogram">Our Program</a></li>
                <li><a href="<?php echo base_url();?>admin/editlocation">Location</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url();?>admin/reg">Registeration</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>admin/logout">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>