<form action="" method="post">
  <input type="text" name="user" placeholder="enter user name"/>
  <br><br>

  <button name="button" value="set">
    Set Session
  </button>
  <br><br>

  <button name="button" value="get">
    Get Session
  </button>
  <br><br>

  <button name="button" value="delete">
    Delete Session
  </button>

</form>


<?php
session_start();

if (isset($_POST['button'])) {
    if ($_POST['button'] == "set") {
        $val = $_POST['user']; 
        $_SESSION['user'] = $val;
        echo "Session is set.";
    }

    if ($_POST['button'] == "get") {
        if (isset($_SESSION['user'])) {
            echo "Session value: " . $_SESSION['user'];
        } else {
            echo "No session value found.";
        }
    }

    if ($_POST['button'] == "delete") {
        session_unset();
        session_destroy();
        echo "Session has been deleted.";
    }
}
?>