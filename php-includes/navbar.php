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
                            <?php 

                            $categories_statement = "SELECT * FROM `categories`";
                                $categories_query = mysqli_query($conn, $categories_statement) OR die('Error in places'.mysqli_error($conn)) ;
                                ;
                            // if(!$places_query){
                            //     die('Error in places'.mysqli_error($con)) ;
                            // }else{
                            //     $places = mysqli_fetch_array($places_query);
                            // }
                            while( $category = mysqli_fetch_array($categories_query)){
                            ?>
                            <li><a href="places.php?category_id=<?php echo $category['cid'] ?>" class="sub-menu-item"><?php echo $category['type_of_place'] ?></a></a></li>
                            <?php
                            }
                            ?>
                             <!-- <li><a href="Co_Working_Places.php" class="sub-menu-item">Co_Working Places</a></li>
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
                        
                             <li class="has-submenu parent-parent-menu-item">
                                <a href="favorites.php">Favourites </a><span class="menu-arrow"></span>
                                <!--button el favorite-->
                                <button type="button" data-id="${}" class="favorite-btn">
                                    <!--shape of favorite button-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill " viewBox="0 0 16 16">
                                  <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                                </svg>
                               </button>
                            </li>
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

