<?php
$proname = $_POST['pro'];
?> 
<h1>Files in your Project - <?php echo $proname; ?> </h1>

<?php

// Read all directories with php on client side
$od = opendir("Directory");
while($files = readdir($od))
{
    echo "<a href='Directory/$files'>$files</a>"."<br>";
}

?>
<br><br>
<a style="text-align: center; padding: 10px; width: 20%; background-color: #d4d4d4; color: #fff; text-decoration: none;" href="Directory.zip">Download</a>