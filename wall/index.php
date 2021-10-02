<?php

$conn = mysqli_connect('localhost','root','','tryart');

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

        $filename = $_FILES["file"]["name"];

        $design_name = $_FILES["design_img"]["name"];

       if(empty($design_name))
       {
            $design_name=$_POST["field"];
       }

    	$tempname = $_FILES["file"]["tmp_name"];
        $temp1 = $_FILES["design_img"]["tmp_name"];
        $folder = "uploads/".$filename;
        $folder1 = "Designs/".$design_name;

    	$dst_db = "uploads/".$filename;
        $dst_db1 = "Designs/".$design_name;

        move_uploaded_file($tempname,$folder);
        move_uploaded_file($temp1,$folder1);

        $query ="insert into `wall` (`image`,`design`)values('$dst_db','$dst_db1')";
		$result = mysqli_query($conn, $query);
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/jcrop/dist/jcrop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/css/jquery.Jcrop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/pixastic/0.1.3/pixastic.all.js"></script>
    <script src="https://unpkg.com/jcrop"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/js/jquery.Jcrop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <title>Make My Wall</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        font-family: sans-serif;
    }

    #image {
        height: 510px;
    }

    .design {
        height: 259px;
    }

    .container {
        padding: 15px;
        height: 540px;
        background-color: white;
        margin-top: 45px;
        margin-bottom: 60px;
    }

    .file-upload-section {
        margin: auto;
        margin-top: 5%;
        padding: 4px;
        text-align: center;
        background: #0275d8;
        cursor: pointer;
        border-radius: 20px;
    }

    #foto-file {
        display: none;
    }

    #design_img {
        display: none;
    }

    #dropdownMenuButton1 {
        margin: auto;
        margin-top: 5%;
        font-weight: bold;
        padding: 4px;
        color: white;
        text-align: center;
        background: #0275d8;
        cursor: pointer;
        width: 255px;
        border-radius: 20px;
        border: none;
    }

    .dropdown ul {
        margin: auto;
        margin-top: 5%;
        font-weight: bold;
        padding: 4px;
        color: white;
        text-align: center;
        background: #0275d8;
        cursor: pointer;
        width: 262px;
        border-radius: 20px;
    }

    .dropdown ul li a {
        text-align: center;
        font-weight: bold;
        color: white;
    }

    .help {
        margin: auto;
        margin-top: 5%;
        font-weight: bold;
        padding: 4px;
        color: white;
        text-align: center;
        background: #0275d8;
        cursor: pointer;
        border-radius: 20px;

    }
    a{color:white;
    }
a:hover{color:white;
}
a::after{color:white;
}
    #upload {
        margin: auto;
        margin-top: 5%;
        font-weight: bold;
        padding: 4px;
        color: white;
        text-align: center;
        background: #0275d8;
        cursor: pointer;
        width: 255px;
        border: none;
        border-radius: 20px;
    }

    .amount label {
        margin: auto;
        margin-top: 5%;
        font-weight: bold;
        padding: 4px;
        color: black;
        text-align: center;
    }

    .design_name {
        margin: auto;
        margin-top: 17%;
        font-weight: bold;
        padding: 4px;
        color: black;
    }

    #design {
        max-height: 259px;
    }

    .design {
        overflow: hidden;
    }

    #wall {
        max-height: 440px;
        max-width: 360px;
        z-index: 1;
        /* margin-left: -20px;
        margin-top: -5px;*/
    }

    #image {
        overflow-y: hidden;
        overflow-x: hidden;
    }

    #image1 {
        margin-left: 700px;
        margin-top: -510px;
        height: 507px;
    }
    </style>
</head>

<body>
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
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#gallary">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../feedback/index.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#contactus">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-4" id="image" style="margin-left:30px;">
                <h3 style="text-align: center">Your Selected Wall</h3>
                <div>

                    <?php
                            $sql="select  * from wall ORDER BY sno DESC";
                            $res=mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($res)
                            ?> <br>
                    <img src="<?php echo $row['image']; ?>" id="wall">
                </div>
            </div>
            <div class="col-3" id="info">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-content-section"
                    enctype="multipart/form-data" name="feedbackForm">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Design
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="Gallery_for_design.php">Select from our Design</a>
                                <input type="hidden" id="hiddenfield" name="field" value="">
                            </li>
                            <li>
                                <input type="file" id="design_img" name="design_img">
                                <label for="design_img" class="btn btn-large" style="text-align: center;
                                            font-weight: bold;
                                            color: white;">Select from this device</label>
                            </li>
                        </ul>
                    </div>
                    <div class="file-upload-section">
                        <input type="file" id="foto-file" name="file">
                        <label for="foto-file" type="submit" class="btn btn-large" style="height:13px;
                            margin-top: -18px;
                            font-weight: bold; text-align: center;
                        color: white;" name="submit">Select Wall</label>
                    </div>
                    <div class="upload">
                        <button type="submit" name="submit" id="upload">Make Your Wall</button>
                    </div>
                    <div class="help">
                        <a href="help.php" style="text-decoration: none">Help</a>
                    </div>
                </form>

                <div class="design_name" style="text-align:center;">
                    Your Selected Design
                    <div class="design">
                        <img src="<?php echo $row['design']; ?>" id="design">
                    </div>
                </div>
            </div>
            <div class="col-4" id="image1" style=" ">
                <div>
                    <h3 style="text-align: center;">Your Design</h3>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p class="p-3  bg-dark text-white text-center" style="margin-bottom: 0px;"> Created By @TeamTryart</p>
        </div>
    </footer>
    <script>
    let jcrop = Jcrop.attach('wall');
    jcrop.listen('crop.change', function(widget, e) {
        const pos = widget.pos;
        merge(pos.x, pos.y, pos.w, pos.h);
    });

    function merge(left, top, width, height) {
        var img = new Image();
        img.onload = function() {
            var blendImg = new Image();
            blendImg.onload = function() {
                Pixastic.process(img, "blend", {
                    amount: 3,
                    mode: "multiply",
                    rect: {
                        left: left,
                        top: top,
                        width: width,
                        height: height
                    },
                    image: blendImg
                });
            }
            blendImg.src = "<?php echo $row['design']; ?>";
        }
        img.src = "<?php echo $row['image']; ?>";
        img.setAttribute("style", "margin-top:10px; margin-left:7px; max-height:450px; max-width:380px;");

        document.getElementById("image1").appendChild(img);
        var wall = document.getElementById("wall");
        wall.remove();
        jcrop.destroy();
    }

    function respond() {
        console.log("=======================");
        document.getElementById("hiddenfield").value = localStorage.getItem('buttonname');
        console.log(document.getElementById("hiddenfield").value);
        console.log("========================================");
    }
    respond();
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
