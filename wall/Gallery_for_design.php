
<html lang="en">

<head>
    <title>Select Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</head>
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

.sub {}

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
    font-size: 0px;
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

<<body>
    <div class="containers">
        <form>
            <div class="gallery">
                <div class="gallery-item">

                    <input type="button" onclick="test('home_design.jpg')"  name="button" value="home" class="gallery-image"
                        style="background:url('Designs/home_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img2_design.jpg')" name="button" value="img2" class="gallery-image"
                        style="background:url('Designs/img2_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img4_design.jpg')" name="button" value="img4" class="gallery-image"
                        style="background:url('Designs/img4_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img5_design.jpg')" name="button" value="img5" class="gallery-image"
                        style="background:url('Designs/img5_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img7_design.jpg')" name="button" value="img7" class="gallery-image"
                        style="background:url('Designs/img7_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img8_design.jpg')" name="button" value="img8" class="gallery-image"
                        style="background:url('Designs/img8_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img9_design.jpg')" name="button" value="img9" class="gallery-image"
                        style="background:url('Designs/img9_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img10_design.jpg')" name="button" value="img10" class="gallery-image"
                        style="background:url('Designs/img10_design.jpg');">
                </div>
                <div class="gallery-item">

                    <input type="button" onclick="test('img11_design.jpg')" name="button" value="img11" class="gallery-image"
                        style="background:url('Designs/img11_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img12_design.jpg')" name="button" value="img12" class="gallery-image"
                        style="background:url('Designs/img12_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img21_design.jpg')" name="button" value="img21" class="gallery-image"
                        style="background:url('Designs/img21_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img22_design.jfif')" name="button" value="img22" class="gallery-image"
                        style="background:url('Designs/img22_design.jfif');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img25_design.jpg')" name="button" value="img25" class="gallery-image"
                        style="background:url('Designs/img25_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img26_design.jpg')" name="button" value="img26" class="gallery-image"
                        style="background:url('Designs/img26_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img30_design.jpg')" name="button" value="img30" class="gallery-image"
                        style="background:url('Designs/img30_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img31_design.jpg')" name="button" value="img31" class="gallery-image"
                        style="background:url('Designs/img31_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img33_design.jpg')" name="button" value="img33" class="gallery-image"
                        style="background:url('Designs/img33_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img35_design.jpg')" name="button" value="img35" class="gallery-image"
                        style="background:url('Designs/img35_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img37_design.jpg')" name="button" value="img37" class="gallery-image"
                        style="background:url('Designs/img37_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img41_design.jpg')" name="button" value="img41" class="gallery-image"
                        style="background:url('Designs/img41_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img42_design.jpg')" name="button" value="img42" class="gallery-image"
                        style="background:url('Designs/img42_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img43_design.jpg')" name="button" value="img43" class="gallery-image"
                        style="background:url('Designs/img43_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img46_design.jpg')" name="button" value="img46" class="gallery-image"
                        style="background:url('Designs/img46_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img47_design.jpg')" name="button" value="img47" class="gallery-image"
                        style="background:url('Designs/img47_design.jpg');">
                </div>
                <div class="gallery-item">
                    <input type="button" onclick="test('img48_design.jpg')" name="button" value="img48" class="gallery-image"
                        style="background:url('Designs/img48_design.jpg');">
                </div>
            </div>
        </form>
    </div>    <script>

            function test(name)
            {
                console.log("Working");
                localStorage.setItem("buttonname",name);
                window.location.href="http://localhost:8020/Tested/wall/index.php";
            }

    </script>
