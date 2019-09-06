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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



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
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="BooksPage.php" class="list-group-item list-group-item-action bg-light">Books</a>
        <a href="MemberPage.php" class="list-group-item list-group-item-action bg-light">Members</a>
        <a href="BorrowedPage.php" class="list-group-item list-group-item-action bg-light">Borrowed</a>
        <a href="ExpiredPage.php" class="list-group-item list-group-item-action bg-light">Expired</a>
        <a href="SettingPage.php" class="list-group-item list-group-item-action bg-light">Settings</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" style="background-color:#e6e6e6 ">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        

       <h4>Dashboard</h4>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">USER <span class="sr-only">(current)</span></a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                more
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




 <div style="margin-top:5%; margin-left:8% ;display:inline-block; margin-right: 5% ">

  <div class="card" style="width: 18rem;" >
  <img src="images/book.jpg" class="card-img-top" >
  <div class="card-body">
    <a href="#" style="margin-left: 80px">Add Books</a>
  </div>
   </div>

</div>

<div style="display: inline-block;">


    <div class="card" style="width: 18rem;" style="margin-top: 10000px;margin-left: 10px; display: inline-block;">
     <img src="images/member.jpg" class="card-img-top" style="height: 165px">
     <div class="card-body">
       <a href="#" style="margin-left: 80px">Add Member</a>
      </div>
       </div>


</div>


<div style="display: inline-block; margin-left: 5%">


    <div class="card" style="width: 18rem;" style="margin-top: 10000px;margin-left: 10px; display: inline-block;">
     <img src="images/borrow.jpg" class="card-img-top" style="height: 165px">
     <div class="card-body">
       <a href="#" style="margin-left: 80px">Return Book</a>
      </div>
       </div>


</div>



<div style="margin-top: 5%; margin-left:8% ;display: inline-block; " >


    <div class="card" style="width: 18rem;" style="margin-top: 10000px;margin-left: 10px; display: inline-block;">
     <img src="images/return.jpg" class="card-img-top" style="height: 165px">
     <div class="card-body">
       <a href="#" style="margin-left: 80px">Borrow Book</a>
      </div>
       </div>


</div>



<div style="margin-top: 5%; margin-left:5% ;display:inline-block;" >


    <div class="card" style="width: 18rem;" style="margin-top: 10000px;margin-left: 10px; display: inline-block;">
     <img src="images/search.jpg" class="card-img-top" style="height: 165px">
     <div class="card-body">
       <a href="#" style="margin-left: 80px">Check Availability</a>
      </div>
       </div>


</div>


      


<div style="margin-top: 5%; margin-left:5% ;display:inline-block;" >


    <div class="card" style="width: 18rem;" style="margin-top: 10000px;margin-left: 10px; display: inline-block;">
     <img src="images/settings.jpg" class="card-img-top" style="height: 165px">
     <div class="card-body">
       <a href="#" style="margin-left: 80px">Settings</a>
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
