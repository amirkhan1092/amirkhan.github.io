<!DOCTYPE html>
<html>
<body>
<script src = "jquery-2.2.3.min.js" ></script>

<script >

function post_data(a_data)
{
   //document.getElementById('myImage').src = "pic_bulboff.gif";
   
   $.post( "my_data_write.php", { a_data: a_data },function(){ location.reload();} );
}

</script>

<script>
    $(document).ready(function() {
        // SET AUTOMATIC PAGE RELOAD TIME TO 5000 MILISECONDS (5 SECONDS).
        setInterval('refreshPage()', 5000);
   });

    function refreshPage() { 
     location.reload(); 
    }
</script>

 
<?php
$myfile = fopen("file_to_read.html", "r") or die("Unable to open file!");
$fp =fgets($myfile);
fclose($myfile);
?>
    

 
 
 <?php if($fp=="off" || $fp=="0") {
?>	
<img id="myImage" src = "pic_bulboff.gif" width = "155" height = "250">	
<?php }
 ?>
 <?php if($fp=="on"|| $fp=="1" ) {
?>	
<img id="myImage" src = "pic_bulbon.gif" width = "155" height = "250" >	
<?php }
 ?>



<p>
<button type="button" onclick="post_data('on')">Light On</button>
<button type="button" onclick="post_data('off')">Light Off</button>
</p>

</body>
</html>