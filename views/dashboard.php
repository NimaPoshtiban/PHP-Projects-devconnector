<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Welcome To The Developer Connector</title>
</head>

<body>
  <nav class="navbar bg-dark">
    <h1>
      <a href="index.php"><i class="fas fa-code"></i> DevConnector</a>
    </h1>
    <ul>
      <li><a href="profiles.php">Developers</a></li>
      <?php if (!Login::is_user_logged_in()): ?>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
      <?php else:?>
      <li><a href="posts.php">Posts</a></li>
      <li> | <a href="dashboard.php" title="Dashboard"><i class="fas fa-user"></i> <span
            class="hide-sm">Dashboard</span></a> </li>
      <li> <a
          href="<?=BASE_URL .'?logout=true'?>"
          title="Logout"> <i class="fas fa-sign-out-alt"></i> <span class="hide-sm">Logout</span></a></li>
      <?php endif; ?>
    </ul>
  </nav>
  <section class="container">
    <h1 class="large text-primary">
      Dashboard
    </h1>
    <p class="lead"><i class="fas fa-user"></i> Welcome <?=Login::get_user_info()->name;?></p>
    <div class="dash-buttons">
      <a href="create-profile.php" class="btn btn-light"><i class="fas fa-user-circle text-primary"></i> Edit
        Profile</a>
    </div>


    <!-- <div class="my-2">
      <button class="btn btn-danger">
        <i class="fas fa-user-minus"></i>

        Delete My Account
      </button>
    </div> -->
  </section>

</body>

</html>