<?php
require('parts/header.php');
if (!empty($_POST)) {
  $sql = "SELECT * FROM `users` WHERE `e-mail`='" . $_POST['e-mail'] . "' AND `password`='" . $_POST['password'] . "'";

  $result = mysqli_query($conn, $sql);
  $user = $result->fetch_assoc();

  // var_dump($user);
  if ($user) {
    $_SESSION["user_id"] = $user['id'];
    header("Location: /");
    // echo $user['id'];
  } else {
    $_SESSION["user_id"] = null;
  }
}
?>

<main class="form-signin w-100 m-auto">
  <form action="#" method="POST">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="e-mail" class="form-control" id="floatingInput" name="e-mail" placeholder="name@example.com">
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 button button-lg button-primary" type="submit">Sign in</button>
  </form>
</main>

<?php
require('parts/footer.php');
?>