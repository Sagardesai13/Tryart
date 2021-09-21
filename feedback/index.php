<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback Form</title>
        <!-- BOOTSTRAP CDN Links -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
        <!-- Custom CSS file -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Feedback Form</h1>
        <div class="container">
            <div class="wrap">
                <h2 class="h2-tag">Please help us to serve you better by taking a couple of minutes!</h2><br>
                <form method="post" action="register.php" class="form-content-section" enctype="multipart/form-data" name="feedbackForm">
                    
                    <div class="form-floating mb-4">
                        <div class="rateyo" style="" id= "rating"
                            data-rateyo-rating="4.0"
                            data-rateyo-num-stars="5"
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
                        <label for="floatingPassword">Name</label>
                    </div>
                    
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" id="emailErr" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    
                    <div class="form-floating mb-4">
                        <textarea name="suggestion" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
                    </div>
                    
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="submit" class="btn btn-outline-success" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
        
            $(function (){
                $(".rateyo").rateYo().on("rateyo.change", function (e, data){
                    var rating = data.rating;
                    $(this).parent().find('.score').text('score : '+ $(this).attr('data-rateyo-score'));
                    $(this).parent().find('.result').text('Rating : '+ rating);
                    $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
                });
            });

        </script>
    </body>
</html>
