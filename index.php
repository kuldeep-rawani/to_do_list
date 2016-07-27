<?php
session_start();
include("database.php");
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
            <input name="title1" value="" />

            <button name="action1" value="Login">
                <a href="permission.php" style="text-decoration:none">Log-in</a>
            </button>

            <button name="action2" value="register">
                <a href=register.php style="text-decoration:none">Register here</a>
            </button>
            



            <!--<button name="action" value="check">
                <span>Check</span>
            </button>-->
        </form>
    </li>

</ul>
<script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo "permission.php"; ?>';
    });
  </script>
</body>