<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'> -->
        <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'> -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="<?php echo base_url() ?>assets/js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrap">
            <div class="header-main">
                <div class="nav-user">
                    <div class="container">
                        <ul>
                            <li>
                                Welcome Guest!
                            </li>
                            <li>
                                <a href="#login" role="button" data-toggle="modal">Log In</a>
                                /
                            </li>
                            <li>
                                <a href="#signup" role="button" data-toggle="modal">Sign Up</a>
                            </li>
                            <li>
                                <a class="cart" href="#"><i class="icon-shopping-cart icon-white"></i>Cart 0</a>
                            </li>
                        </ul>
                        <!-- nav-user -->
                        <div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2 id="myModalLabel">Log In</h2>
                            </div>
                            <div class="modal-body">
                                <form class="form-login form-user form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <div class="controls">
                                            <input type="text" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox"> Remember me
                                            </label>
                                            <button type="submit" class="btn btn-large btn-primary">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- login modal -->
                        <div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2 id="myModalLabel">Join SuitShop</h2>
                            </div>
                            <div class="modal-body">
                                <form class="form-signup form-user form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <div class="controls">
                                            <input type="text" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Retype Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-large btn-primary">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                    
                        <!-- signup modal -->
                    </div>
                    <!-- contaier -->
                </div>
                <!-- nav-user -->
                <div class="menu container">
                    <div class="row">
                        <a class="logo span3" href="#">
                            <img src="<?php echo base_url() ?>assets/img/logo.png" alt="" height="81" width="150">
                        </a>
                        <ul class="nav-main offset1 span8">
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?php echo site_url('product/category/' . $category->id) ?>"><?php echo $category->name ?></a>
                                </li>    
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-main -->

            <?php echo $this->load->view($body) ?>

        </div>
        <!-- wrap -->    

        <div class="footer-main row">
            <ul class="social-links">
                <li>
                    <a class="twitter" href="#">@suitshop</a>
                </li>
                <li>
                    <a class="facebook" href="#">Facebook</a>
                </li>
            </ul>
            <ul class="nav-footer ">
                <li>
                    <a href="#">About</a>
                </li>
                <li class="muted">·</li> 
               <li>
                    <a href="#">Privacy Policy</a>
                </li>
                <li class="muted">·</li> 
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <small class="copyright ">&copy; 2013 SuitShop</small>
        </div>
        <!-- footer-main -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="<?php echo base_url() ?>assets/js/jquery.elevateZoom-2.5.5.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    </body>
</html>
