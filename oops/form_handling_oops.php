<form action="" method="post">
    <input type="text" placeholder="Enter User Name" name="user"><br><br>
    <button>Click</button>
</form>

<?php
if(isset($_POST['user'])){
  class User{
    function getName($name){
      echo "User name is:$name";
    }
  }
  $user = new User();
  $user->getName($_POST['user']);
}




?>


