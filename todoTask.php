<html>
<?php 

//Starting Session.
session_start();

//executing if 'ADD' button pressed.
if(isset($_POST['ADD']))
{
$_val = $_POST['taskText'];
if(!empty($_val))
{
    $_array = array($_val);
}
else
{
    $_array =array();
}
 
if(isset($_SESSION['values']))
{
    $_array = array_merge($_SESSION['values'],$_array);
}
$_SESSION['values'] = $_array;
//$_val ="";
}

//executing if 'CLEAR' button pressed.
if(isset($_POST['CLEAR']))
{
    //Clearing 'values' Session elements.
    include ("deleteSession.php");
}
?>
<!--HTML Tags.-->
    <head>
    <title>TODO PAGE</title>
    </head>
    <link rel="stylesheet" href="cssStyle.css">
    <center>
    <form method="POST">
    <h4 id="heading">Form Page</h4>
    <h4 id="TeacherName">Assigned By: Sir Gulsher Laghari</h4>
    <h5 id="data">Developed by: Kanwal<br>2K18/CSM/120</h5>
    <h3>Enter Your Task</h3>
    <div>
    <input class="task" id="textbox" type="text" placeholder="Enter Text Here " name="taskText" />
    <input class="buttons" type="submit" name="ADD" value="ADD TASK"/>
    <input class="buttons" type="submit" name="CLEAR" value="CLEAR ALL"/>
    </div>
</form>
    </center>
</html>