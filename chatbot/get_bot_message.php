<?php
date_default_timezone_set('Asia/Kolkata');
include('database.inc.php');
$txt=mysqli_real_escape_string($con,$_POST['txt']);
$sql="select reply from chatbot_hints where question like '%$txt%'";

$res=mysqli_query($con,$sql);						
if($txt=='bedroom'||$txt=='kitchen'||$txt=='livinroom'||$txt=='hall'||$txt=='storeroom'||$txt=='studyroom')
{
	$sql="select image from images_table where type='$txt'";
	$res=mysqli_query($con,$sql);	
	while($row=mysqli_fetch_assoc($res)){
	$html=$row['image'];
?>	           <img style="height:200px;width:200px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
<?php
	
}}
else if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$html=$row['reply'];
	echo $html;

}
else{
	
	$html="Sorry not be able to understand you";
	echo $html;
}
?>