<?php

// Create a file
#touch("test.php");

// delete a file
#unlink("test.php");

// rename a file
#rename("test.php","style.css");

// copy a file
#copy("style.css","css.css");

##########################################################################

// create a directory
#mkdir("css");

// delete a directory
#rmdir("css");

// rename a directory
#rename("css","config");

// check the directory available or not

if(is_dir("config"))
{
    echo "Directory found";
}
else
{
    echo "Directory Not found";
}


?>