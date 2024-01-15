 <header class="header">
            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="container-f">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="<?php echo site_url("user/Home/home2") ?>">Home</a>                               
                                </li>
                                <li class="dropdown has-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JOIN US <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member Panel <span class="fa fa-angle-right"></span></a>
                                            <ul class="dropdown-menu show-left" role="menu">
                                                <li><a href="<?php echo site_url("institute/insLogin/login/") ?>">Member Login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar">
                                <li class="dropdown cartmenu searchmenu hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu show-right">
                                        <li>
                                              <?php 
                                if(isset($_SESSION['stid']))
                                {
                                ?>
                                            <form method="post" action="<?php echo site_url("user/Home/home2") ?>">
                                  <?php
                                  }
                                  else{
                                    ?>

                                            <form method="post" action="<?php echo site_url("user/Home") ?>">
                                    <?php
                                  } 
                                  ?>
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-lg" placeholder="Search here..." / name="txtsearch">
                                                    <span class="input-group-btn">
                                                        <input class="btn btn-primary btn-lg" type="submit" name="btnsearch" value="search">
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown hasmenu">
                                <?php 
                                if(isset($_SESSION['stid']))
                                {
                                ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                               <?php echo $_SESSION['stname'] ?>
                                <span class="fa fa-angle-down"></span></a>
                                    
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url("user/Manageprofile/loadmyprofile") ?>">Profile</a></li>
                                        <li><a href="<?php echo site_url("user/Student/logoutstudent") ?>">Logout</a></li>
                                    </ul>


                                <?php 
                            }
                            else{
                                ?>
                                <a href="<?php echo site_url("user/Student")?>">
                                Login</a>
                              <?php
                            }
                            ?>
                                 
                                    </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav><!-- end nav -->
            </div><!-- end container -->
        </header><!-- end header -->
