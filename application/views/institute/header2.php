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
                                    <a href="<?php echo site_url("institute/Home/home2") ?>">Home</a>                               
                                </li>
                           <!--     <li class="dropdown has-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member Panel <span class="fa fa-angle-right"></span></a>
                                            <ul class="dropdown-menu show-left" role="menu">
                                               <li><a href="<?php echo site_url("institute/Institutereg/") ?>">Become Member</a></li>
                                                <li><a href="<?php echo site_url("institute/insLogin/") ?>">Member Login</a></li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </li>-->
                            </ul>

                           
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown hasmenu">
                                <?php 
                                if(isset($_SESSION['uid']))
                                {
                                ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                               <?php echo $_SESSION['uname'] ?>
                                <span class="fa fa-angle-down"></span></a>
                                    
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url("institute/Manageprofile/loadmyprofile") ?>">Profile</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/logout") ?>">Logout</a></li>
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
