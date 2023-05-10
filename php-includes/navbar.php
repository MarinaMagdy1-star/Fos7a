<?php require_once("php-functions/connection.php"); ?>


 <!-- Navbar STart -->
 <header id="topnav" class="defaultscroll sticky">
            <div class="container">
            

           


<!-- End Logo container-->
<div class="menu-extras">
        <header>
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="index.php">Home </a><span class="menu-arrow"></span>
                            
                           

                            <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Categories</a><span class="menu-arrow"></span>
                          <ul class="submenu">
                            <li><a href="Touristic_Places.php" class="sub-menu-item">Touristic Places</a></a></li>
                             <li><a href="Co_Working_Places.php" class="sub-menu-item">Co_Working Places</a></li>
                             <li><a href="Adventure_Places.php" class="sub-menu-item">Adventure Places</a></li>
                             <li><a href="Restaurants&Cafes.php" class="sub-menu-item">Restaurants & Cafes</a></li>
                         -->
                           </ul>
                           <?php if(!isset($_SESSION['user_id'])) { ?>

                           <li class="has-submenu parent-parent-menu-item">
                               <a href="javascript:void(0)">Place Owners</a><span class="menu-arrow"></span>
                               <ul class="submenu">
                               <?php if(!isset($_SESSION['placeowner_id'])) { ?>

                                   <li><a href="signUp_PlaceOwner.php" class="sub-menu-item">Sign Up</a></li>
                                   <li><a href="login.php" class="sub-menu-item">Login</a></li>
                                   <?php }else{ ?>
                                       <li><a href="logout.php" class="sub-menu-item">Logout</a></li>
                                       <?php } ?>

                               </ul>
                                <?php } ?>
                        

                            <li class="has-submenu parent-parent-menu-item">
                            <a href="About_Us.php">About Us </a>
                            </li>
                            <!-- <?php if(!isset($_SESSION['placeowner_id'])) { ?>
                            <li class="has-submenu parent-parent-menu-item">
                            <a href="register.php">Register</a>
                            </li>
                            <li class="has-submenu parent-parent-menu-item">
                            <a href="user_login.php">Login</a>
                            </li>
                            <?php } ?> -->
                            <?php if(isset($_SESSION['user_id'])) { ?>
                            <li class="has-submenu parent-parent-menu-item">
                            <a href="logout.php">Logout</a>
                            
                            
                            </li>
                            <?php }elseif(isset($_SESSION['placeowner_id'])){ ?>
                                <li class="has-submenu parent-parent-menu-item">
                            <a href="logout.php">Logout</a>
                            </li>
                            <?php }else{ ?>
                                


                            <li class="has-submenu parent-parent-menu-item">
                               <a href="javascript:void(0)">Users</a><span class="menu-arrow"></span>
                               <ul class="submenu">
                                 <li><a href="register.php" class="sub-menu-item">Register</a></li>
            
                                 <li><a href="user_login.php" class="sub-menu-item">Login</a></li>
                                    

                               </ul>
                               <?php } ?>

                             </li>
                        
                             <?php if(isset($_SESSION['user_id'])) { ?>
                            <li class="has-submenu parent-parent-menu-item">
                            <a href="favorites.php">Favorites</a><span class="menu-arrow"></span>                                
                            </li>
                            <?php }?>
                            
                         </li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

 <!-- Back to top -->
 <ul class="text-center list-unstyled switcher-button mb-0 position-fixed" style="top: 20%; left: 10px; z-index: 2;">
            <li class="d-grid"><a href="javascript:void(0)" class="btn btn-icon rounded-circle btn-dark dark-version t-dark" onclick="setTheme('style-dark')"> <i class="uil uil-moon fs-5"></i> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class="btn btn-icon rounded-circle btn-dark light-version t-light" onclick="setTheme('style')"> <i class="uil uil-sun fs-5"></i> </a></li>
           
        </ul>
        <a href="javascript:void(0)" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill"><i class="mdi mdi-arrow-up"></i></a>
        <!-- Back to top -->

