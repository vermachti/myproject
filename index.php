<?php 
?>
<html>
<b>HOME</b>
</br>
<a href="stiahni.php"><i>stiahni</i></a>
</br>
<form method="POST" ENCTYPE="multipart/form-data" action="upload.php">
<input type="input" name="fileToUpload" id="fileToUpload">
</br>
<input type="submit" name="submit" value="Upload File"> 
</form>

</html>
<?php
readfile("test.txt");
?>