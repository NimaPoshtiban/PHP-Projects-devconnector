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
      <li> | <a href="dashboard.html" title="Dashboard"><i class="fas fa-user"></i> <span
            class="hide-sm">Dashboard</span></a> </li>
      <li> <a
          href="<?=BASE_URL .'?logout=true'?>"
          title="Logout"> <i class="fas fa-sign-out-alt"></i> <span class="hide-sm">Logout</span></a></li>
      <?php endif; ?>
    </ul>
  </nav>
  <section class="container">
    <h1 class="large text-primary">Developers</h1>
    <p class="lead">
      <i class="fab fa-connectdevelop"></i> Browse and connect with developers
    </p>
    <div class="profiles">
      <?php foreach ($data as $name):?>
      <div class="profile bg-light">
        <img class="round-img" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200" alt="" />
        <div>
          <h2>
            <?=$name->name?>
          </h2>
          <p>
            <?=$name->status ?? "Unknown" ?> at <?=$name->company ?? "Unknown"?>
          </p>
          <p><?=$name->location?></p>
          <a href="profile.php" class="btn btn-primary">View Profile</a>
        </div>

        <ul>
          <li class="text-primary">
              <?=$name->skills ?? null?>
          </li>
        </ul>
      </div>

      <?php endforeach;?>
    </div>
  </section>
</body>

</html>