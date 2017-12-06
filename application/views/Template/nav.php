<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Resevation System</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>pages/browse">Browse</a></li>
            <li><a href="<?php echo base_url(); ?>pages/login">Login</a></li>
            <li><a href="<?php echo base_url(); ?>pages/user">User</a></li>
          </ul>




          <form class="navbar-form navbar-right" role="search" action="<?php echo base_url(); ?>pages/search" method="get">
            <div class="form-group">
              <input type="text" class="form-control" name="keyword" placeholder="Search" value="<?php $keyword;?>">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
          </form>

        </div>
      </div>
    </nav>
    <div class='container'>
