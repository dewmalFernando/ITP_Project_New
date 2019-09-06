<?php require_once('includes/connection.php'); ?>

<?php
//$selectQuery = "SELECT SID, FName, LName, DOB, Type FROM student where LibMember = 1";

$selectQuery = "SELECT SID, FName, LName, DOB, Type FROM student where LibMember = 1";

$resultSet = mysqli_Query($connection, $selectQuery);

if ($resultSet) {
  //echo mysqli_num_rows($resultSet) . " Records found. <hr>";
} else {
  echo mysqli_num_rows($resultSet) . " No records found. <hr>";
}

?>


<!--Not working-------------------------------------------------------------------->
<?php                                                                               
if (isset($_POST['deleteButton'])) {
  $StudentId = $rows['SID'];


  $deleteQuery = "UPDATE student SET LibMember = 0 WHERE SID = '$StudentId'";

  $resultSet = mysqli_Query($connection, $deleteQuery);

  if ($result) {
    echo " Record deleted";
  } else {
    echo " Unsuccessful";
  }
}
?>
<!--Not working-------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">




  <link rel="stylesheet" type="text/css" href="css/styles.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




</head>

<body>




  <script>
    $(window).on("load", function() {
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>


  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>






  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" style="background-color: #0384fc;">
      <div class="sidebar-heading">Library System</div>
      <div class="list-group list-group-flush">
        <a href="HomePage.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Books</a>
        <a href="MemberDetails.php" class="list-group-item list-group-item-action bg-light">Members</a>
        <a href="BorrowedPage.php" class="list-group-item list-group-item-action bg-light">Borrowed</a>
        <a href="ExpiredPage.php" class="list-group-item list-group-item-action bg-light">Expired</a>
        <a href="FinesPage.php" class="list-group-item list-group-item-action bg-light">Fines</a>
        <a href="SettingPage.php" class="list-group-item list-group-item-action bg-light">Settings</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">


        <h4>Member Details</h4>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">USER <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Settings</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>Member ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Type</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
                <?php
                while ($rows = mysqli_fetch_assoc($resultSet)) {


                  ?>

                  <tr>
                    <th><?php echo $rows['SID']; ?></th>
                    <th><?php echo $rows['FName']; ?> </th>
                    <th> <?php echo $rows['LName']; ?></th>
                    <th><?php echo $rows['SID']; ?></th>
                    <th><?php echo $rows['DOB']; ?></th>
                    <th><?php echo $rows['Type']; ?></th>
                    <form action="MemberDetails.php" method="POST">
                    <th><button type="button" class="btn btn-success" name="updateButton">Update</button></th>
                    <th><button type="button" class="btn btn-dark" name="deleteButton">Delete</button></th>
                    </form>
                    
                    
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>




    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>