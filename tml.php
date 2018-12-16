<?php
$dev = $_GET['device'];
$cmd = '/bin/bash var/www/html/myproject/feature.sh '.$dev;
echo $cmd;
shell_exec($cmd);
$output = shell_exec('/bin/bash fortune');
echo "<pre>$output</pre>";
?>
<HTML>
 <BODY>
    <FORM method="post" action="feature.py"> 
        <INPUT TYPE="submit" VALUE="Submit" NAME="Submit"> 
    </FORM>
 </BODY>
</HTML>
