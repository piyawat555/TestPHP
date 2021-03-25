<?php include('../connection/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
	<?php include('include/head.php') ?>
	<?php include('include/script.php') ?>	
    <body class="app">
	<?php include('include/header.php') ?>
        <!--//app-header-->

        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
                <!-- <hr class="my-4"> -->
                <?php 
                if(!isset($_GET['page']) && empty($_GET['page'])) {
                    include('dashboard/index.php');
                }elseif(isset($_GET['page'])&& $_GET['page'] == 'about' ){
                    include('about/index.php');
                }elseif(isset($_GET['page'])&& $_GET['page'] == 'product' ){
                    include('product/index.php');
                }elseif(isset($_GET['page'])&& $_GET['page'] == 'producttype' ){
                    include('producttype/index.php');
                }elseif(isset($_GET['page'])&& $_GET['page'] == 'admin' ){
                    include('admin/index.php');
                }elseif(isset($_GET['page'])&& $_GET['page'] == 'insert' ){
                    include('admin/insert.php');
                }
                ?>
			
			</div>
                <!--//container-fluid-->
            </div>
            <!--//app-content--> 
			<?php include('include/footer.php') ?>
			
        </div>
	
    </body>
</html>
