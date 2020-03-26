<?php
require_once './config.php';
if(empty($_SESSION['user_id']))
{
      header('location:logout.php'); 
}
if (isset($_REQUEST['submit'])) {
$service_title = $_REQUEST['service_title'];
$sub_service = $_REQUEST['sub_service'];
$switch = !empty($_POST['switch'])?$_POST['switch']:'';
if(!empty($_POST['id']))
{
     $gettbl_service = mysqli_query($con, " UPDATE tbl_service SET switch = '".$switch."',service_title='".$_POST['service_title']."',sub_service='".$_POST['sub_service']."' WHERE id='" . $_POST['id'] . "' ");    
}
 else
 {
 
 $gettbl_service = mysqli_query($con, "INSERT  INTO tbl_service(`switch`,`service_title`,`sub_service`)"
            . "VALUES ('".$switch."','" . $_POST['service_title'] . "','" . $_POST['sub_service'] . "')");
     
}

}

$result = mysqli_query($con, "select * from tbl_service where id = 1 ");
$row = mysqli_fetch_assoc($result);


if (isset($_REQUEST['submitclick'])) {
    $icon1 = $_REQUEST['icon1'];
    $sub_title1 = $_REQUEST['sub_title1'];
    $last_title1 = $_REQUEST['last_title1'];

    
    
    
   
   
        $gettbl_service_icon = mysqli_query($con, "INSERT INTO `tbl_service_icon`(`icon1`,`sub_title1`,`last_title1`) "
            . "VALUES ('" . $_POST['icon1'] . "','" . $_POST['sub_title1'] . "','" . $_POST['last_title1'] . "' )");
    
   
    
}

$result_icons = mysqli_query($con, "select * from tbl_service_icon");
$row_icons = mysqli_fetch_assoc($result_icons);




    

?>

<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Service</title>
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
        <link rel="stylesheet" type="text/css" href="assets/scss/styleservice.css">
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
                            <h1>Service</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            
              <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-12 col-sm-12">
                        <form action="" method="post">
                        <div class="card">
                            <div class="card-header">
                                <strong>Service</strong> 
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Switch</label>
                                    <div class="input-group">
                                        <input <?= !empty($row['switch']) ? 'checked' : '' ?> type="checkbox"  name="switch" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class=" form-control-label">Main Title</label>
                                    <div class="input-group">
                                        <input name="service_title"  value="<?= !empty($row['service_title']) ? $row['service_title'] : '' ?>" required="" class="form-control">
                                    </div>
                               </div>
                                
                                <div class="form-group">
                                    <label class=" form-control-label">Sub Main Title</label>
                                    <div class="input-group">
                                        <textarea name="sub_service"   required="" class="form-control"><?= !empty($row['sub_service']) ? $row['sub_service'] : '' ?></textarea>
                                        
                                    </div>
                               </div>
                                 
                                <div class="form-group">
                                               <input type="hidden" name="id" value="<?= !empty($row['id']) ? $row['id'] : '' ?>" >
                                               <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form" style="margin-top: 10px;">Submit</button>
                                            </div>
                                
                        </div>
                        </div>
                        </form>
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
                                          
                                            <form name="" action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label>Icon1</label>
                                                                <input name="icon1"  placeholder="Fa Fa Icon" value="<?= !empty($row['icon1']) ? $row['icon1'] : '' ?>" required="" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Sub Title1</label>
                                                                <input name="sub_title1"  placeholder="Sub Title" value="<?= !empty($row['sub_title1']) ? $row['sub_title1'] : '' ?>" required="" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label>Last Title1</label>
                                                                <textarea class="form-control" placeholder="Last Title" required name="last_title1" ><?= !empty($row['last_title1']) ? $row['last_title1'] : '' ?></textarea>
                                                                
                                                            </div>
                                                      
                                                            

                                                            <input type="hidden" name="id" value="<?= !empty($row['id']) ? $row['id'] : '' ?>" >

                                                            
                                                            <button type="submit" class="btn btn-primary" name="submitclick" value="Submit" id="submit_form">Submit</button>

                                            </form>                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                          
                                             <table class="table">
                                                <tr>
                                                    <th>Icon</th>
                                                    <th>Sub Title</th>
                                                    <th>Last Title</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php
                                                $result_icon1 = mysqli_query($con, "select * from tbl_service_icon");
                                                while ($row_icon1 = mysqli_fetch_assoc($result_icon1)) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                    <?= $row_icon1['icon1'] ?>
                                                        </td>
                                                        <td>
                                                        <?= $row_icon1['sub_title1'] ?>
                                                        </td>
                                                        <td><?= $row_icon1['last_title1'] ?></td>
                                                        <td>
                                                            <a href="serviceedit.php?id=<?= $row_icon1['id'] ?>" class="btn btn-info">Edit</a>
                                                            <a href="servicedelete.php?id=<?= $row_icon1['id'] ?>" class="btn btn-warning">Delete</a>
                                                        </td>
                                                    </tr>

                                                <?php
                                                }
                                                ?>
                                               </table>   
                                            
                                            
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

