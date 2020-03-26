<?php
require_once './config.php';

if(empty($_SESSION['user_id']))
{
      header('location:logout.php'); 
}

if (isset($_REQUEST['submit'])) {
    $switch = !empty($_POST['switch'])?$_POST['switch']:'';
    if(!empty($_POST['id']))
    {
         $gettbl_footer = mysqli_query($con, " UPDATE tbl_footer SET switch = '".$switch."',main_title='".$_POST['main_title']."',sub_title='".$_POST['sub_title']."',address_title='".$_POST['address_title']."',sub_address='".$_POST['sub_address']."',profile='".$_POST['profile']."',designed='".$_POST['designed']."' WHERE id ='" . $_POST['id'] . "' ");    
    }
     else
     {

     $gettbl_footer = mysqli_query($con, "INSERT  INTO tbl_footer(`switch`,`main_title`,`sub_title`,`address_title`,`sub_address`,`profile`,`designed`)"
                . "VALUES ('".$switch."','" . $_POST['main_title'] . "','" . $_POST['sub_title'] . "','" . $_POST['address_title'] . "','" . $_POST['sub_address'] . "','" . $_POST['profile'] . "','" . $_POST['designed'] . "')");

    }

}




$result = mysqli_query($con, "select * from tbl_footer where id = 1 ");
$row = mysqli_fetch_assoc($result);
    



?>

<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Footer</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-icon.png">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/scss/style.css">
    </head>
    <body>


        <?php
        require_once './sidebar.php';
        ?>

        <div id="right-panel" class="right-panel">

        <?php
        require_once './header.php';
        ?>


            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Footer</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Footer</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

               <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="pay-invoice">
                                        <div class="card-body">
                                       
                                            
             
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                       <div class="form-group">
                                    <label>Switch</label>
                                    <input <?= !empty($row['switch']) ? 'checked' : '' ?> type="checkbox"  name="switch" >
                                </div>
                                    
                                       <div class="form-group">
                                    <label class=" form-control-label">Contact Title</label>
                                    <div class="input-group">
                                        <input name="main_title"  value="<?= !empty($row['main_title']) ? $row['main_title'] : '' ?>" required="" placeholder="" class="form-control">
                                    </div>
                               </div>
                                       <div class="form-group">
                                    <label class=" form-control-label">Contact Sub Title</label>
                                    <div class="input-group">
                                        <input name="sub_title"  value="<?= !empty($row['sub_title']) ? $row['sub_title'] : '' ?>" required="" placeholder="" class="form-control">
                                    </div>
                               </div>
                                       <div class="form-group">
                                    <label class=" form-control-label">Address Title</label>
                                    <div class="input-group">
                                        <input name="address_title"  value="<?= !empty($row['address_title']) ? $row['address_title'] : '' ?>" required="" placeholder="" class="form-control">
                                    </div>
                               </div>
                                    
                                     <div class="form-group">
                                    <label class=" form-control-label">Address Sub Title</label>
                                    <div class="input-group">
                                        <textarea name="sub_address"   required="" class="form-control"><?= !empty($row['sub_address']) ? $row['sub_address'] : '' ?></textarea>
                                        
                                    </div>
                               </div>
                                    
                                    
                                      <div class="form-group">
                                    <label class=" form-control-label">Profile</label>
                                    <div class="input-group">
                                        <textarea name="profile"   required="" class="form-control"><?= !empty($row['profile']) ? $row['profile'] : '' ?></textarea>
                                        
                                    </div>
                               </div>
                                    
                                 
                                <div class="form-group">
                                    <label class=" form-control-label">Copy Right</label>
                                    <div class="input-group">
                                        <input name="designed"  value="<?= !empty($row['designed']) ? $row['designed'] : '' ?>" required="" placeholder="" class="form-control">
                                    </div>
                               </div>
                                    
                 
                                             <div class="form-group">
                                                 <input type="hidden" name="id" value="<?= !empty($row['id']) ? $row['id'] : '' ?>" >
                                               <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form" style="margin-top: 10px;">Submit</button>
                                     
                                    
                                                                                       
                                       </div>
                                    </form>  
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            
          
        </div> 

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
       
    </body>
</html>

  