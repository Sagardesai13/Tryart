<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


    <title>Tryart</title>
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
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallary">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="feedback/index.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <?php
        include('chatbot/index.php');
    ?>
    <div id="demo" class="carousel slide pt-1" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="image/img12.png" alt="Gray">

            </div>
            <div class="carousel-item">
                <img src="image/img13.jpg" alt="Red">

            </div>

            <div class="carousel-item">
                <img src="image/home.jpg" alt="Green">

            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="aboutus">About Us
                <hr class="width:60% margin-left:auto margin-right:auto" />
            </h2>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class=" aboutimg pb-5"><img src="image/picture.jfif" class="img-fluid "></div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2>A new wall</h2>
                    <p class="py-3"> We are working with artist in our town who want for work and we give them work.
                        These days, present day imaginative divider is sparkling among the houses.We practice to paint
                        and we show our innovativeness to individuals with few charges.
                    <p>
                        <a href="aboutus.php" class="btn btn-success"> Know more </a>
                </div>
            </div>

        </div>

    </section>
    <section class="my-5">
        <div class="py-5">
            <div class="pt-5">
                <h2 class="text-center pt-5" id="ourservice">Our services</h2>
                <hr>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="image/img.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Decorative Wall</h4>
                            <p class="card-text">A wall with paintings and awsome aesthetic designs</p>
                            <a href="decorative.php" class="btn btn-primary">Get Idea</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="image/img4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Artistic Wall</h4>
                            <p class="card-text">A wall with artistic design.</p>
                            <a href="artisticwall.php" class="btn btn-primary">Get Idea</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="image/img19.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Simple Wall</h4>
                            <p class="card-text">A wall with beautiful texture</p>
                            <a href="Simplewall.php" class="btn btn-primary">Get Idea</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="aboutus">Make my wall
                <hr class="width:60% margin-left:auto margin-right:auto" />
            </h2>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="mainwall" style="margin-left:10px">
                    <div class="designedwall">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-8" style="margin-left:212px">
                    <p class="py-3"> Want to see illusion of your new wall? then you must try this.</p>
                    <a href="wall/index.php" class="btn btn-primary">Try</a>
                </div>

            </div>

    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="gallary">Gallery
                <hr>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/img2.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/img18.jfif" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/img3.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/img9.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/img46.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/img8.jpg" class="img-fluid pb-4">
                </div>
            </div>
        </div>
        <section class="my-auto">
            <div class="w-70 m-auto">
                <div class="py-auto">
                    <h2 class="text-center" id="contactus">Contact Us</h2>
                    <form action="" name="form1" method="post"
                        style="display:flex; flex-direction:column; align-items:center;">
                        <div class="form-group" style="width:315px;">
                            <label> Phone number </label>
                            <input type="number" name="mobile" required autocomplete="off" class="form-control">
                            <label> Name </label>
                            <input type="text" required name="name" autocomplete="off" class="form-control">
                            <label> Adress </label>
                            <input type="text" required name="adress" autocomplete="off" class="form-control">
                            <label> Email </label>
                            <input type="email" name="email" required autocomplete="off" class="form-control">
                            					<label> Captcha Code </label>
				                            <input type="text" name="captcha" required autocomplete="off" class="form-control" id="captcha_id"></br>
            <label>Code</label>
			<?php  $string = "abc123";  ?>
        <strong><i><h4 id="captcha" style="margin-top:-36px;margin-left:50px;position: absolute;"><?php echo str_shuffle($string) ?></h4></i></strong><img src="image/captcha.jpg" height="40" width="130;">
                   &nbsp;&nbsp;<button type="button" id="verify_captcha"  class="btn btn-primary ml-3 ">Verify</button>
                            <div class="pt-3 text-center">
                                <button type="submit" class="btn  btn-outline-dark"



                                    onclick="phonenumber(document.form1.mobile)">call back</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <br>
        <footer>
            <div>
                <p class="p-3  bg-dark text-white text-center">  Created By @TeamTryart</p>
            </div>
        </footer>
        <script type="text/javascript">
        function phonenumber(inputtxt) {
            var phoneno = /^\d{10}$/;
            if (inputtxt.value.match(phoneno)) {
                return true;
            } else {
                alert("Enter valid Mobile number");
                return false;
            }
        }
        </script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
     $("#verify_captcha").click(function(){
        var captcha_id = $("#captcha_id").val();
        var captchID = $("#captcha").text();
         if(captcha_id == captchID)
         {
            setTimeout(
              function()
                {    //disable
                    $('#verify_captcha').addClass("btn btn-success disabled").text("Verified");
                    $('#verify_captcha').attr("disabled", false);
                });
         }
         else
         {
            $('#verify_captcha').addClass("btn btn-danger").text("Not Matched");
            $("#captcha_id").prop('disabled', true);
            setTimeout(
              function()
                {    //disable
                    $('#captcha_id').val("");
                    $("#captcha_id").prop('disabled', false);
                    $('#verify_captcha').removeClass("btn btn-danger").text("Verify Code");
                }, 1500);
         }
      });
    });
</script>
</body>

</html>