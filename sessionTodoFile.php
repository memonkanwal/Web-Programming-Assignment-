<center>
<h3 style="color: blue;">Tasks List</h3>
<?php

//Checking if Session is empty or not.
if(!empty($_SESSION['values']))
{
 
    //Printing all elements one by one using loop.
    foreach ($_SESSION['values'] as $key=>$value)
    {
        echo "<pre>";
        print_r($value);
        echo "<br>";
    }
 }    
else
{
    echo "No Task Found.";
}    
?>
</center>

