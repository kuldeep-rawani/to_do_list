<?php
session_start();
include("database.php");
//$uname=$_SESSION['uname'];
//echo $uname;
if(isset($_POST['actionshow']))
{
    display($db);

}
function display($db){
                  $uname=$_SESSION['uname'];
                  echo $uname;
                  $query="SELECT task FROM task_list WHERE id='$uname'";
                  $result=pg_query($db,$query);
                  pg_close($db);

}
//display($db);
if($result){
    echo 1;

}else{
    $u=pg_last_error($db);  
    echo $u;
}
//var_dump(display);
//echo $uname;
//var_dump($uname);
//var_dump($result);


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
        <form method="post">
            <input  type="hidden" name="index" />
            <input name="title" value="" />

            <button name="action" value="Log out">
                <a href="logout.php" style="text-decoration:none">Logout</a>
            </button>

            <button name="action" value="register">
                <a href="add-task" style="text-decoration:none">ADD</a>
            </button>
             <button name="action" value="Show task">
                <a href="show.php" style="text-decoration:none">Show task</a>
            </button>
            



            <!--<button name="action" value="check">
                <span>Check</span>
            </button>-->
        </form>
    </li>

</ul>
</body>
</html>
