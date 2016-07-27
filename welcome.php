<?php
session_start();
include("database.php");
$uname=$_SESSION['uname'];
echo $uname;
//var_dump($uname);

?>

<!doctype html>
<meta charset="utf-8" />
<title>Todo list</title>

<head>
    <h1>
        <span>Todo list</span>
    </h1>
</head>
<body>
<ul>
    <li>
        <form method="post" action="add-task.php">
            <input  type="hidden" name="index" />
            <input type="hidden" name="uname" value="echo $uname"/>
            <input name="title1" value="write your to do list here" />
            <input type="submit" value="Add">

        </form>
            <button name="actionout" value="Log out">
                <a href="logout.php" style="text-decoration:none">Logout</a>
            </button>

            
             <button name="actionshow" value="Show task">
                <a href="show.php" style="text-decoration:none">Show task</a>
            </button>
            



            <!--<button name="action" value="check">
                <span>Check</span>
            </button>-->
        
    </li>

</ul>

    
</body>
</html>
