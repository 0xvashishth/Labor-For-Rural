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
	          <a class="nav-link active" href="#">Add Work</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="#">Contact-us</a>
	          <!-- <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
	        </li>
	      </ul>
	      <form class="d-flex">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-primary" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>
	<br>

	<!-- filters -->
	<div class="container ">
			<input class="form-control" id="myInput" type="text" placeholder="Search by keyword...">
			<br>
			<div class="row d-flex justify-content-center">
				<select class="form-select w-25" id="cropselect" aria-label="Default select example">
				  <option selected>Filter by Crop</option>
				  <option value="rice">rice</option>
				  <option value="wheat">wheat</option>
				  <option value="tobacco">tobacco</option>
				  <option value="sugarcane">sugarcane</option>
				</select>
				&nbsp;&nbsp;
				<select class="form-select w-25" id="timingselect" aria-label="Default select example">
				  <option selected>Filter by Timing</option>
				  <option value="rice">rice</option>
				  <option value="wheat">wheat</option>
				  <option value="tobacco">tobacco</option>
				  <option value="sugarcane">sugarcane</option>
				</select>
				&nbsp;&nbsp;
				<select class="form-select w-25" id="workselect" aria-label="Default select example">
				  <option selected>Filter by work</option>
				  <option value="harvesting">harvesting</option>
				  <option value="planting">planting</option>
				  <option value="plough-fields">plough fields</option>
				  <option value="other">other</option>
				</select>
			</div>
	</div>
<!-- work section -->
	
	<div class="container myTable">
		<div class="container mt-5 mb-3">
		    <div class="row">
		        <div class="col-md-4 rr">
		            <div class="card p-3 mb-2">
		                <div class="d-flex justify-content-between">
		                    <div class="d-flex flex-row align-items-center">
		                        <div class="icon"> <img class="avatar11" src="https://www.w3schools.com/w3images/avatar6.png" alt="avatar" /> </div>
		                        <div class="ms-2 c-details">
		                            <h6 class="mb-0">Rameshbhai</h6> <span>1 days ago</span>
		                        </div>
		                    </div>
		                </div><br>
		                <div class="d-flex">
		                    <div class="badge"> <span>Design</span> </div>
		                    <div class="badge"> <span>Design</span> </div>
		                </div>
		                <div class="mt-4">
		                    <h4 class="heading">Wheat Cutting</h4>
		                    <h5>250 ₹</h5>
		                    <h6><span class="text2">Timings : </span> 8 AM to 12 PM</h6>
		                    	<button type="button" class="btn btn-primary">Apply</button>
		                    	<button type="button" class="btn btn-secondary float-right">Wishlist</button>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-4 rr">
		            <div class="card p-3 mb-2">
		                <div class="d-flex justify-content-between">
		                    <div class="d-flex flex-row align-items-center">
		                        <div class="icon"> <img class="avatar11" src="https://www.w3schools.com/w3images/avatar6.png" alt="avatar" /> </div>
		                        <div class="ms-2 c-details">
		                            <h6 class="mb-0">Rameshbhai</h6> <span>1 days ago</span>
		                        </div>
		                    </div>
		                </div><br>
		                <div class="d-flex">
		                    <div class="badge"> <span>Design</span> </div>
		                    <div class="badge"> <span>Design</span> </div>
		                </div>
		                <div class="mt-4">
		                    <h4 class="heading">Wheat Cutting</h4>
		                    <h5>250 ₹</h5>
		                    <h6><span class="text2">Timings : </span> 8 AM to 12 PM</h6>
		                    	<button type="button" class="btn btn-primary">Apply</button>
		                    	<button type="button" class="btn btn-secondary">Wishlist</button>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-4 rr">
		            <div class="card p-3 mb-2">
		                <div class="d-flex justify-content-between">
		                    <div class="d-flex flex-row align-items-center">
		                        <div class="icon"> <img class="avatar11" src="https://www.w3schools.com/w3images/avatar6.png" alt="avatar" /> </div>
		                        <div class="ms-2 c-details">
		                            <h6 class="mb-0">Rameshbhai</h6> <span>1 days ago</span>
		                        </div>
		                    </div>
		                </div><br>
		                <div class="d-flex">
		                    <div class="badge"> <span>Design</span> </div>
		                    <div class="badge"> <span>Design</span> </div>
		                </div>
		                <div class="mt-4">
		                    <h4 class="heading">Wheat Cutting</h4>
		                    <h5>250 ₹</h5>
		                    <h6><span class="text2">Timings : </span> 8 AM to 12 PM</h6>
		                    	<button type="button" class="btn btn-primary">Apply</button>
		                    	<button type="button" class="btn btn-secondary">Wishlist</button>
		                </div>
		            </div>
		        </div>	
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
		        <h1>First slide label</h1>
		        <h3>Some representative placeholder content for the first slide.</h3>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="assets/img/laborone2.jpg" class="d-block w-100" height="600px" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1>First slide label</h1>
		        <h3>Some representative placeholder content for the first slide.</h3>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="assets/img/labor3.jpg" class="d-block w-100" height="600px" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h1>First slide label</h1>
		        <h3>Some representative placeholder content for the first slide.</h3>
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
 <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#" class="bg-light"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
        </footer>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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