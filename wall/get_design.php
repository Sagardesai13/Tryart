<?php
$photoId = isset($_POST['button']) ? $_POST['button'] : "home"; ?>
<img style="width:400px;width:400px;"src=" <?php echo ($photoId != null) ?'../Designs/' . $photoId . '.jpg' : 'img.jpg'; ?>">
