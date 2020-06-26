<html>
    <head>
        <title>homepage</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
            <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
		<link rel="stylesheet" type=text/css href="<?php echo base_url(); ?>assets/css/stylesheet1.css">
    </head>
    <body>
    <header>

<nav class = "navbar navbar-expand-sm navbar-light" style="display:grid;grid-template-columns:1fr 7fr 3fr;grid-template-rows:auto;">
    <a class="navbar-brand" href="<?php echo base_url(); ?> ">Gazette</a>
    <div class="main_nav" >
      <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/posts">International</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">National</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Regional</a>
            </li>	
            <li class="nav-item">
                <a class="nav-link" href="#">Business </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Entertainment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Technology</a>
            </li>
            <li class="nav-item">	
                <a class="nav-link" href="#">Sports</a>
            </li>
      </ul>
    </div>
        <div class="right_nav" style="justify-self:start;">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <div class="search-bar">
                        <form class="form-inline" action="/action_page.php">
                            <div class="input-group mb-3 input-group-sm">
                                <input class="form-control" type="text" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                            </div>
                        </form>	
                    </div>
              </li>
              <li>
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/posts/create">Create Post</a>
</li>    
                <div class="Login">	
                
                <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/users/register">Register</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
</header>
