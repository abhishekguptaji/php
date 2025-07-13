<form action="" method="post">
  <input type="text" name="user" placeholder="enter user name"/>
  <br><br>
  <button name="button1" value="set">
    Set Cookies
  </button>
  <br><br>
  <button name="button2" value="display">
    Display Cookies
  </button>
  <br><br>
  <button name="button3" value="delete">
    Delete Cookies
  </button>
</form>

<?php

if(isset($_POST['button1'])){
 if($_POST['button1']=="set"){
  $val= $_POST['user'];
  setcookie('user',$val);
  echo "cookie is set";
}
}
if(isset($_POST['button2'])){
  if($_POST['button2']=="display"){
    if (isset($_COOKIE['user'])) {
        echo $_COOKIE['user'];
    } 
  }
}
if(isset($_POST['button3'])){
  if($_POST['button3']=="delete"){
    if (isset($_COOKIE['user'])) {
        setcookie("user",null,-1);
    } 
  }
}
?>