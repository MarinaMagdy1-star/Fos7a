

 <!-- Navbar STart -->
 <?php $conn->set_charset("utf8"); ?>

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
                            <a href="index.php">الصفحه الرئيسيه</a><span class="menu-arrow"></span>
                            
                           

                            <li class="has-submenu parent-parent-menu-item">


                            <a href="javascript:void(0)">انواع الاماكن</a><span class="menu-arrow"></span>

                          <ul class="submenu">
                          
                            <?php
$categories_statement = "SELECT `cid`, `type_of_place_ar` FROM `categories`";
$categories_query = mysqli_query($conn, $categories_statement) or die('Error in places' . mysqli_error($conn));

while ($category = mysqli_fetch_array($categories_query)) {
    $category_id = $category['cid'];
    $category_name = $category['type_of_place_ar'];
    ?>
    <li><a href="places.php?category_id=<?php echo $category_id ?>" class="sub-menu-item"><?php echo $category_name ?></a></li>
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
                               <a href="javascript:void(0)">اصحاب الاماكن</a><span class="menu-arrow"></span>
                               <ul class="submenu">
                               <?php if(!isset($_SESSION['placeowner_id'])) { ?>

                                   <li><a href="signUp_PlaceOwner.php" class="sub-menu-item">اشتراك</a></li>
                                   <li><a href="login.php" class="sub-menu-item">تسجيل الدخول</a></li>
                                   <?php }else{ ?>
                                       <li><a href="placeowner_profile.php" class="sub-menu-item">طلباتي</a></li>
                                       <li><a href="logout.php" class="sub-menu-item">تسجيل خروج</a></li>
                                       <?php } ?>

                               </ul>
                                <?php } ?>
                        

                            <li class="has-submenu parent-parent-menu-item">
                            <a href="About_Us.php">من نحن</a>
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
                            <a href="logout.php">تسجيل خروج</a>
                            </li>
                            <?php }elseif(isset($_SESSION['placeowner_id'])){ ?>
                                <li class="has-submenu parent-parent-menu-item">
                            <a href="logout.php">تسجيل خروج</a>
                            </li>
                            <?php }else{ ?>


                            <li class="has-submenu parent-parent-menu-item">
                               <a href="javascript:void(0)">المستخدم</a><span class="menu-arrow"></span>
                               <ul class="submenu">
                                 <li><a href="register.php" class="sub-menu-item">تسجيل</a></li>
            
                                 <li><a href="user_login.php" class="sub-menu-item">تسجيل الدخول</a></li>
                                    

                               </ul>
                               <?php } ?>

                             </li>
                        
                             <?php if(isset($_SESSION['user_id'])) { ?>
                            <li class="has-submenu parent-parent-menu-item">
                            <a href="favorites.php">المفضل</a><span class="menu-arrow"></span>                                
                            </li>
                            <?php }?>

                            <li class="has-submenu parent-parent-menu-item">
                            <a href="../index.php">English</a><span class="menu-arrow"></span>                                
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

