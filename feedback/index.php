<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <!-- BOOTSTRAP CDN Links -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <!-- Custom CSS file -->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="style.css">
</head>



<body style="height:0;">
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
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#aboutus">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#gallary">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#contactus">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="Feedback">Feedback Form
                <hr class="width:60% margin-left:auto margin-right:auto" />
            </h2>

        </div>
        <div class="container">
            <div class="wrap">
                <p class="py-3">Please help us to serve you better by taking a couple of minutes!</p><br>
                <form method="post" action="register.php" class="form-content-section" enctype="multipart/form-data"
                    name="feedbackForm">

                    <div class="form-floating mb-4">
                        <div class="rateyo" style="" id="rating" data-rateyo-rating="4.0" data-rateyo-num-stars="5"
                            data-rateyo-score="3">
                        </div>
                        <span class='result' style="color: white;">Rating : 0</span>
                        <input type="hidden" name="rating">
                    </div>

                    <div class="mb-4">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" name="file" id="formFile">
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" name="name" class="form-control" id="nameErr" placeholder="Enter Name...">
                        <label for="floatingName">Name</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" id="emailErr"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea name="suggestion" class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
                    </div>

                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="submit" class="btn btn-outline-success" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="py-5">
            <h2 class="text-center" id="Feedback">Feedback
                <hr class="width:60% margin-left:auto margin-right:auto" />
            </h2>
        </div>

<div class="container-fluid">
            <div class="row">
               <?php
            include('register.php');
            $sql="select  *from feedback_form";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res)){
            ?>
               <div class="col-lg-4 col-md-4 col-12" >
                    Name:<?php
            $html=$row['Name'];
            echo $html;?><br>Rating:<?php
           $html=$row['Rating'];
            echo $html;?><br>Comment:<?php
                $html=$row['Feedback'];
            echo $html;?><br>Image:<?php
            	$html=$row['Image']; ?><br>
                    <img style="height:200px;width:200px;"
                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image']); ?>" class"img-fluid pb-4"  />
                </p>  </div> <?php } ?>

</div>
</div>
    </section>

    <footer>
        <div>
            <p class="p-3  bg-dark text-white text-center"> Created By @TeamTryart</p>
        </div>
    </footer>
    <script>
    $(function() {
        $(".rateyo").rateYo().on("rateyo.change", function(e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score : ' + $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('Rating : ' + rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>