<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

  <link rel="stylesheet"
    href="assets/css/style.css" />
  <title>Welcome To The Developer Connector</title>
</head>

<body>
  <nav class="navbar bg-dark">
    <h1>
      <a href="index.php"><i class="fas fa-code"></i> DevConnector</a>
    </h1>
    <ul>
      <li><a href="profiles.php">Developers</a></li>
    <?php if(!Login::is_user_logged_in()): ?>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
      <?php else:?>
      <li><a href="posts.php">Posts</a></li>
      <li> | <a href="dashboard.html" title="Dashboard"><i class="fas fa-user"></i> <span class="hide-sm">Dashboard</span></a> </li>
      <li> <a href="<?=BASE_URL .'?logout=true'?>" title="Logout"> <i class="fas fa-sign-out-alt"></i> <span class="hide-sm">Logout</span></a></li>
      <?php endif; ?>
    </ul>
  </nav>
  <section class="landing">
    <div class="dark-overlay">
      <div class="landing-inner">
        <h1 class="x-large">Developer Connector</h1>
        <p class="lead">
          Create a developer profile/portfolio, share posts and get help from
          other developers
        </p>
        <div class="buttons">
          <a href="register.php" class="btn btn-primary">Sign Up</a>
          <a href="login.php" class="btn btn-light">Login</a>
        </div>
      </div>
    </div>
  </section>
</body>

</html>