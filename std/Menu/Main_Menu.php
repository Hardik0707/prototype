
  <?php 

  session_start();

  if($_SESSION['username']=="")
  {
  header("refresh:2,url=../login.php");
  die("Login Required");
  }
  else
  {
    $username = $_SESSION['username'];
  }

?>

		<?php include_once('../Includes/header_files.php'); ?>
      <?php include_once('../Includes/Header.php'); ?>
      <?php include_once('../Includes/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            WELCOME <?php echo $username; ?>
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php include_once('../Includes/footer.php'); ?>
  </body>
</html>
