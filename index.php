<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/img/logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<title>Labor For Rural</title>
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
	  <div class="container-fluid">
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="navbar-toggler">
	    	<img src="assets/img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
	    	<b>Labor For Rural</b>
	    </div>
	    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	      <a class="navbar-brand d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" href="#">
	      	<img src="assets/img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
			<b>Labor For Rural</b>
		  </a>
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Work</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="#noticeModal" data-toggle="modal">Add Work</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="#contactModal" data-toggle="modal">Contact-us</a>
	          <!-- <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
	        </li>
	      </ul>
	        <a class="btn btn-outline-primary" href="#loginModal" data-toggle="modal">Login</a> &nbsp;
	        <a class="btn btn-outline-secondary" href="#registerModal" data-toggle="modal">Register</a>
	    </div>
	  </div>
	</nav>
	<br>

	<!-- filters -->
	<div class="container ">
			<input class="form-control" id="myInput" type="text" placeholder="Search by keyword...">
	</div>
<!-- work section -->
	
	<div class="container myTable">
		<div class="container mt-5 mb-3">
		    <div class="row">

						<?php

						include 'profiles/config.php';

						$sql = "SELECT * FROM `work` order by `created_time` DESC LIMIT 100";
						$result = mysqli_query( $conn , $sql );
						if( !$result )
							die( "Something went wrong" );
												while( $row=mysqli_fetch_assoc($result))
						{
							if($i % 2 == 0){
							echo '<div class="col-md-4 rr">
		            <div class="card p-3 mb-2">
		                <div class="d-flex justify-content-between">
		                    <div class="d-flex flex-row align-items-center">
		                        <div class="icon"> <img class="avatar11" src="https://www.w3schools.com/w3images/avatar6.png" alt="avatar" /> </div>
		                        <div class="ms-2 c-details">
		                            <h6 class="mb-0">'. $row["linkuser"] .'</h6> <span>'. $row["created_time"] .'</span>
		                        </div>
		                    </div>
		                </div><br>
		                <div class="d-flex">
		                    <div class="badge"> <span>Design</span> </div>
		                    <div class="badge"> <span>Design</span> </div>
		                </div>
		                <div class="mt-2">
		                    <h4 class="heading">'. $row["wname"] .'</h4>
		                    <h5>'. $row["wprice"] .'₹</h5>
		                    <h6><span class="text2">Timings : </span>'. $row["wtime"] .'</h6>
		                    <h6><span class="text2">Phone : </span>'. $row["wnumber"] .'</h6>
		                    	<button type="button" class="btn btn-primary" href="#noticeModal" data-toggle="modal">Apply</button>
		                    	<button type="button" class="btn btn-secondary" href="#noticeModal" data-toggle="modal">Wishlist</button>
		                </div>
		            </div>
		        </div>';}
		        else{
		        	echo '<div class="col-md-4 rr">
		            <div class="card p-3 mb-2">
		                <div class="d-flex justify-content-between">
		                    <div class="d-flex flex-row align-items-center">
		                        <div class="icon"> <img class="avatar11" src="https://www.w3schools.com/w3images/avatar3.png" alt="avatar" /> </div>
		                        <div class="ms-2 c-details">
		                            <h6 class="mb-0">'. $row["linkuser"] .'</h6> <span>'. $row["created_time"] .'</span>
		                        </div>
		                    </div>
		                </div><br>
		                <div class="d-flex">
		                    <div class="badge"> <span>Design</span> </div>
		                    <div class="badge"> <span>Design</span> </div>
		                </div>
		                <div class="mt-2">
		                    <h4 class="heading">'. $row["wname"] .'</h4>
		                    <h5>'. $row["wprice"] .'₹</h5>
		                    <h6><span class="text2">Timings : </span>'. $row["wtime"] .'</h6>
		                    <h6><span class="text2">Phone : </span>'. $row["wnumber"] .'</h6>
		                    	<button type="button" class="btn btn-primary" href="#noticeModal" data-toggle="modal">Apply</button>
		                    	<button type="button" class="btn btn-secondary" href="#noticeModal" data-toggle="modal">Wishlist</button>
		                </div>
		            </div>
		        </div>';
		        }
						    $i ++;
						}


						 ?>	
		    </div>
		</div>
	</div>

	<div class="container">
		  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="assets/img/labor1.jpg" class="d-block w-100" height="600px" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1>Welcome To Labor For Rural</h1>
		        <h3>It is only through labor and painful effort, by grim energy and resolute courage, that we move on to better things.</h3>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="assets/img/laborone2.jpg" class="d-block w-100" height="600px" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1>Welcome To Labor For Rural</h1>
		        <h3>The supreme accomplishment is to blur the lines between work and play.</h3>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="assets/img/labor3.jpg" class="d-block w-100" height="600px" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1>Welcome To Labor For Rural</h1>
		        <h3>A man is not paid for having a head and hands, but for using them.</h3>
		      </div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	</div>

<br>


<!-- footer -->
 <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Add Work</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Labor For Rural</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col item social"><a href="#" class="bg-light"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Labor For Rural © 2021</p>
            </div>
        </footer>
    </div>

<!--contact us modals -->

    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
            <img src="assets/img/logo.png" class="logi" height="50" width="80">
          </div>
          <div class="modal-body">
            <form action="https://formspree.io/f/mwkaoank" method="post"> 
              <div class="form-group">
                <label for="formGroupExampleInput21" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="formGroupExampleInput21" required placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput22" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="formGroupExampleInput22" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
              </div>
              <div class="form-group">
                <label for="concern23" class="col-form-label">Elaborate Your Concern:</label>
                <textarea class="form-control" id="concern23" name="concern" placeholder="Enter Your Concern"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value="Submit" class="btn btn-danger my-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- login modal -->


    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <img src="assets/img/logo.png" class="logi" height="50" width="80">
          </div>
          <div class="modal-body">
            <form action="profiles/action.php" method="post"> 
              <div class="form-group">
                <label for="formGroupExampleInput11" class="col-form-label">Username:</label>
                <input type="text" class="form-control" name="usernamelog" id="formGroupExampleInput11" required placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput12" class="col-form-label">Role:</label>
                <select required name="rolelog" class="form-control" id="formGroupExampleInput12">
                	<option value="worker">Worker</option>
                	<option value="manager">Manager</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput13" class="col-form-label">Password:</label>
                <input type="Password" class="form-control" id="formGroupExampleInput13" aria-describedby="emailHelp" placeholder="Enter Password" name="passwordlog">
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value="Submit" class="btn btn-success my-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- register modal -->

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Register</h5>
            <img src="assets/img/logo.png" class="logi" height="50" width="80">
          </div>
          <div class="modal-body">
            <form action="profiles/action.php" method="post"> 
              <div class="form-group">
                <label for="formGroupExampleInput1" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="nameregister" id="formGroupExampleInput1" required placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2" class="col-form-label">Email:</label>
                <input type="email" class="form-control" name="emailregister" id="formGroupExampleInput2" required placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput3" class="col-form-label">Mobile No:</label>
                <input type="text" class="form-control" name="mobileregister" id="formGroupExampleInput3" required placeholder="Enter Mobile No">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput4" class="col-form-label">Age:</label>
                <input type="text" class="form-control" name="ageregister" id="formGroupExampleInput4" required placeholder="Enter Your Age">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput5" class="col-form-label">Village:</label>
                <input type="text" class="form-control" name="villageregister" id="formGroupExampleInput5" required placeholder="Enter Your Village">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput6" class="col-form-label">Role:</label>
                <select required name="roleregister" class="form-control" id="formGroupExampleInput6">
                	<option value="worker">Worker</option>
                	<option value="manager">Manager</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput7" class="col-form-label">Set Username:</label>
                <input type="text" class="form-control" id="formGroupExampleInput7" aria-describedby="emailHelp" placeholder="Enter Username" name="usernameregister">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput8" class="col-form-label">Set Password:</label>
                <input type="Password" class="form-control" id="formGroupExampleInput8" aria-describedby="emailHelp" placeholder="Enter Password" name="passwordregister">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value="Submit" class="btn btn-primary my-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- notice modal -->

  <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You haven't logged in</h5>
      </div>
      <div class="modal-body">
        Please login or register to add work or apply for a work.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
		<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".myTable .rr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>