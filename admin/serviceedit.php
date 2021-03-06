<?php
    require_once './config.php';
if(empty($_SESSION['user_id']))
{
      header('location:logout.php'); 
}
    if (isset($_POST['submitclick'])) 
    {
        mysqli_query($con, "UPDATE tbl_service_icon SET icon1='" . $_POST['icon1'] . "', sub_title1='" . $_POST['sub_title1'] . "', last_title1='" . $_POST['last_title1'] . "' WHERE id = '" . $_POST['id'] . "'  ");
        header('Location:service.php');
    }
    
    $select_query = mysqli_query($con, "SELECT * FROM `tbl_service_icon` WHERE id = '" . $_GET['id'] . "' ");
    $row_icon1 = mysqli_fetch_assoc($select_query);
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
    </head>
    <body>


        <?php
        require_once './sidebar.php';
        ?>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <?php
            require_once './header.php';
            ?>


            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Update Service</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Update Service</li>
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
                                <div class="card-header">
                                    <strong class="card-title">Service</strong>
                                </div>
                                <div class="card-body">
                                    <!-- Credit Card -->
                                    <div id="pay-invoice">
                                        <div class="card-body">

                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <label class=" form-control-label">Icon</label>
                                                    <div class="input-group">
                                                        <input name="icon1"  value="<?= !empty($row_icon1['icon1']) ? $row_icon1['icon1'] : '' ?>" required=""  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">Sub Title</label>
                                                    <div class="input-group">
                                                        <input name="sub_title1"  value="<?= !empty($row_icon1['sub_title1']) ? $row_icon1['sub_title1'] : '' ?>" required=""  class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class=" form-control-label">Last Name</label>
                                                    <div class="input-group">
                                                <textarea class="form-control"  required name="last_title1" ><?= !empty($row_icon1['last_title1']) ? $row_icon1['last_title1'] : '' ?></textarea>
                                                      
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= !empty($row_icon1['id']) ? $row_icon1['id'] : '' ?>" >
                                                    <button type="submit" class="btn btn-primary" name="submitclick" value="Submit" id="submit_form" style="margin-top: 10px;">Update</button>
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
        <script>
            (function ($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>

    </body>
</html>

