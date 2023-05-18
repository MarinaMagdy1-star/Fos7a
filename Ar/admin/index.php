<?php 
require_once("php-functions/connection.php"); 


include("php-functions/login_function.php"); ?>
<!DOCTYPE html>
<html>

<?php include("php-includes/head-tags.php"); ?>

<body>

<body class="vertical-layout vertical-menu 1-column  bg-primary menu-expanded blank-page blank-page  pace-done" data-open="click" data-menu="vertical-menu" data-col="1-column">
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"></div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body pt-0">

                    <?php if(isset($login_failed)) { ?>
                  <div class="alert alert-danger" role="alert">
                    <strong> <?php echo $login_failed ?> </strong>
                    </div>
                <?php }?>

                    <form class="form-horizontal" method="POST">
                      <fieldset class="form-group floating-label-form-group">
                        <label for="email">Your Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Admin Email">
                      </fieldset>
                      <fieldset class="form-group floating-label-form-group mb-1">
                        <label for="password">Enter Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                      </fieldset>
                      <button type="submit" name="dashboard_login"  class="btn btn-outline-primary btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                  
                </div>
                <?php if(isset($logfailed)): ?>
                <div class="alert alert-danger alert-dismissible fade show w-100 my-3" role="alert">
                    <h5><?= $logfailed ?></h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                
               
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  

  <?php include("php-includes/scripts.php"); ?>
  
</body>
</html>