<!DOCTYPE html>
<html lang="en ar">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hamdy's blog</title>
  <!-- add my framWork -->
  <link rel="stylesheet" href="css/my-framWork.css" />
  <!-- add font awesome file -->
  <link rel="stylesheet" href="css/all.min.css" />
  <!-- add main style file -->
  <link rel="stylesheet" href="css/main.css" />
  <!-- add google font -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;800&family=Roboto:wght@400;500;900&display=swap"
      rel="stylesheet"
    /> -->
</head>

<body>
  <section class="cotainer">
    <div class="footer">
      <h1>
        Made With <i class="fa-solid fa-heart"></i>
        <a href="https://www.facebook.com/profile.php?id=100011006672549" target="_blank">Amr Mohamed</a>
        © 2023
      </h1>
    </div>
  </section>
  <section class="container-full navbar">
    <nav class="container">
      <div class="logo">
        <a href="index.php" title="Home">
          <img src="img/logo.png" alt="logo" />Hamdy's blog
        </a>
      </div>
      <div class="links center-row">
        <img src="img/bars-s-svgrepo-com.svg" alt="menu" id="btn-menu" />
      </div>
      <div class="menu" id="menu">
        <ul>
          <li><a href="page/log-in.php">التسجيل كمسؤول</a></li>
          <li><a href="page/article.php">لوحة التكم</a></li>
          <li><a href="page/settings.php">الاعدادات</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section class="container">
    <div class="articles" id="articles">
      <div class="article">
        <div class="article-header">
          <h1 class="article-title">test title</h1>
          <h2 class="article-date"><?php print($today = date("F j, Y, g:i a")) ?></h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod illo
          nam odit. At repellat vero modi ab error delectus sequi vel,
          blanditiis, sit dignissimos doloremque consectetur porro natus
          mollitia architecto.
        </p>
      </div>
      <div class="article" dir="auto">
        <div class="article-header">
          <h1 class="article-title" dir="auto">شسيشسشب</h1>
          <h2 class="article-date" dir="auto"><?php print($today = date("F j, Y, g:i a")) ?></h2>
        </div>
        <p dir="auto">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
          illo, aliquid tenetur harum quae maxime voluptas dolores asperiores
          id eveniet, sed adipisci quaerat alias voluptates ipsam tempora est
          quam dolore?
        </p>
      </div>
    </div>
  </section>
  <div id="test"></div>
  <script src="js/all.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/events.js"></script>
</body>

</html>
