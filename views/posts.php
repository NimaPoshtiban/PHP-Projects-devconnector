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
      <li><a href="posts.php">Posts</a></li>
      <li>
        |
        <a href="dashboard.php" title="Dashboard"><i class="fas fa-user"></i>
          <span class="hide-sm">Dashboard</span></a>
      </li>
      <li>
        <a href="<?=BASE_URL . '?logout=true'?>"
          title="Logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="hide-sm">Logout</span></a>
      </li>
    </ul>
  </nav>
  <section class="container">
    <h1 class="large text-primary">
      Posts
    </h1>
    <p class="lead"><i class="fas fa-user"></i> Welcome to the community!</p>

    <div class="post-form">
      <div class="bg-primary p">
        <h3>Say Something...</h3>
      </div>
      <form class="form my-1" method="POST" action="">
        <textarea name="text" cols="30" rows="5" placeholder="Create a post" required></textarea>
        <input type="submit" class="btn btn-dark my-1" value="Submit" />
      </form>
    </div>

    <div class="posts">
      <?php foreach($data as $post):?>
      <div class="post bg-white p-1 my-1">
        <div>
          <a href="profile.php">
            <img class="round-img" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
              alt="" />
            <h4></h4>
          </a>
        </div>
        <div>
          <p class="my-1">
            <?=$post->content ?>
          </p>
          <p class="post-date">
            <?=$post->created_at?>
          </p>
          <button type="button" class="btn btn-light">
            <i class="fas fa-thumbs-up"></i>
            <span>4</span>
          </button>
          <button type="button" class="btn btn-light">
            <i class="fas fa-thumbs-down"></i>
          </button>
          <a href="post.html" class="btn btn-primary">
            Discussion <span class='comment-count'>2</span>
          </a>
          <button type="button" class="btn btn-danger">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <?php endforeach;?>
    </div>

    </div>
  </section>
</body>

</html>