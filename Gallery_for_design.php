<html lang="en">
<head>
  <title>Select Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script></head>
<style>

@import url(https://fonts.googleapis.com/css?family=Montserrat:500);

:root {
	/* Base font size */
	font-size: 10px;
}

*,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	background-color: #fafafa;
}
.sub{

}
.containers {
	max-width: 100rem;
	margin: 0 auto;
	padding: 0 2rem 2rem;
}

.heading {
	font-family: "Montserrat", Arial, sans-serif;
	font-size: 4rem;
	font-weight: 500;
	line-height: 1.5;
	text-align: center;
	padding: 3.5rem 0;
	color: #1a1a1a;
}

.heading span {
	display: block;
}

.gallery {
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

.gallery-item {
	flex: 1 0 24rem;
	margin: 1rem;
	box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 400px;
	height: 400px;
	object-fit: cover;
	font-size:0px;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}

/*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling.

*/

@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
		grid-gap: 2rem;
	}

	.gallery,
	.gallery-item {
		margin: 0;
	}
}

</style>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">Tryart</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.php#aboutus">About Us</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.php#ourservice">Our Servicies</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.php#gallary">Gallery</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.php#contactus">Contact Us</a>
                     </li>

                 </ul>
             </div>
         </div>
     </nav>
<div class="containers">
<form action="get_design.php" method="post">

	<div class="gallery">
		<div class="gallery-item">

			<input type="submit" name="button" value="home" class="gallery-image" style="background:url('Designs/home.jpg');">
		</div>	<div class="gallery-item">

			<input type="submit" name="button" value="img2" class="gallery-image" style="background:url('Designs/img2.jpg');">
		</div>	<div class="gallery-item">

			<input type="submit" name="button" value="img4" class="gallery-image" style="background:url('Designs/img4.jpg');">
		</div>	<div class="gallery-item">

			<input type="submit" name="button" value="img5" class="gallery-image" style="background:url('Designs/img5.jpg');">
		</div>	<div class="gallery-item">

			<input type="submit" name="button" value="img7" class="gallery-image" style="background:url('Designs/img7.jpg');">
		</div>
		<div class="gallery-item">

			<input type="submit" name="button" value="img11" class="gallery-image" style="background:url('Designs/img11.jpg');">
		</div>
		<div class="gallery-item">

			<input type="submit" name="button" value="img9" class="gallery-image" style="background:url('Designs/img9.jpg');">
		</div>
		<div class="gallery-item">

			<input type="submit" name="button" value="img10" class="gallery-image" style="background:url('Designs/img10.jpg');">
		</div>
		<div class="gallery-item">

			<input type="submit" name="button" value="img11" class="gallery-image" style="background:url('Designs/img11.jpg');">
		</div>
		<div class="gallery-item">
			<input type="submit" name="button" value="img9" class="gallery-image" style="background:url('Designs/img9.jpg');">
		</div>
	</div>
</form>
</div>
