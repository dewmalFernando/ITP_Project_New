<?php require_once('includes/connection.php');?>

<?php 
if(isset($_POST['submitButton'])){
  $userType = $_POST['memberType'];
      $bookTitle = $_POST['bookTitle'];
      $noOfBooks = $_POST['noOfBooks'];
      $memberId = $_POST['memberId'];
}
?>

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




<script >$(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
});</script>


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
        <a href="MemberPage.php" class="list-group-item list-group-item-action bg-light">Members</a>
        <a href="BorrowedPage.php" class="list-group-item list-group-item-action bg-light">Borrowed</a>
        <a href="ExpiredPage.php" class="list-group-item list-group-item-action bg-light">Expired</a>
        <a href="SettingPage.php" class="list-group-item list-group-item-action bg-light">Settings</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        

       <h4>Borrow Books</h4>

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

      
      <div class="container">
        <h2>Fill This Form</h2>
        <br>
        <form action="BookBorrow.php" method="POST">
        <div class="form-group">
            <label for="userType">Member Type</label>
            <input type="text" class="form-control" id="userType" name="memberType" required>
          </div>

          <div class="form-group">
            <label for="bookTitle">Book Title</label>
            <input type="text" class="form-control" id="bookTitle" name="bookTitle" required>
          </div>

        <div class="form-group">
            <label for="noOfBooks">No of Books</label>
            <input type="number" class="form-control" id="noOfBooks" name="noOfBooks" required>
          </div>
        
          <div class="form-group">
            <label for="memberId">Member ID</label>
            <input type="text" class="form-control" id="memberId" name="memberId" required>
          </div>
          
          <div class="btn-group-justified" id="btnGroup">
            <button type="reset" class="btn col-sm-2 btn-outline-dark" id="reSetBtn">Cancel</button>
            <button type="submit" class="btn col-sm-2 btn-outline-dark" name="submitButton" id="saveBtn">Save</button>
          </div>
        </form>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    
</script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
