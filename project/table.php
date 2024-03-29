<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ecoqozgalys-AdminPage</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    require_once('db.php');
    $db = DB::getConnection();
    $var = $db->query('SELECT * FROM users');
    $users = array();
    $i = 0;
    while($row= $var->fetch()){
      $users[$i]['id'] = $row['id'];
      $users[$i]['firstname'] = $row['firstname'];
      $users[$i]['surname']= $row['surname'];
      $users[$i]['username']= $row['username'];
      $i++;
    }
  ?>
  <?php
    require_once('db.php');
    $db = DB::getConnection();
    $var2 = $db->query('SELECT * FROM posts');
    $posts = array();
    $j = 0;
    while($row= $var2->fetch()){
      $posts[$j]['id'] = $row['id'];
      $posts[$j]['title'] = $row['title'];
      $posts[$j]['user_id']= $row['user_id'];
      $j++;
    }
  ?>
  <header>
    <nav class="navigation">
      <div class="logotype">ECO-qozgalys</br>admin page</div>
      <ul class="categories">
        <li class="category-item"><a href="#">Data Storage</a></li>
        <li class="category-item"><a href="#">Donuts</a></li>
        <li class="category-item"><a href="#">Account</a></li>
        <li class="category-item"><a href="#">Addresses</a></li>
      </ul>
    </nav>
    <div class="search">
      <input type="search" placeholder="Search for users..."/>
    </div>
  </header>
  <div class="wrapper">
    <aside class="sidebar">
      <ul class="sidebar-list">
        <li class="sidebar-item">
          <a href="index_info.html">
            <img src="C:\Users\админ\Desktop\books\web-programming\preproject\icons\info.png" width="30" height="30"/>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index_news.html">
            <img src="C:\Users\админ\Desktop\books\web-programming\preproject\icons\news.png" width="30" height="30"/>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index_shop.html">
            <img src="C:\Users\админ\Desktop\books\web-programming\preproject\icons\cart.png" width="30" height="30"/>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index_starred.html">
            <img src="C:\Users\админ\Desktop\books\web-programming\preproject\icons\star_sidebar.png" width="30" height="30"/>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index.html">
            <img src="C:\Users\админ\Desktop\books\web-programming\preproject\icons\back.png" width="30" height="30"/>
          </a>
        </li>

      </ul>
    </aside>
    <main class="content">
      <div class="feed-grid">
          <div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th style="width: 36px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($users as $i):
        ?>
        <tr>
          <td>
          <?php
           echo $i['id'];
           ?>
         </td>
         <td>
           <?php
            echo $i['firstname'];
             ?>
         </td>
         <td>
           <?php
            echo $i['surname'];
             ?>
         </td>
         <td>
           <?php
            echo $i['username'];
             ?>
         </td>
         <td>
         <button class="myBtn">edit</button>
         <button class="myBtn">delete</button>
        </td>

       <?php endforeach?>
        </tr>
      </tbody>
    </table>
  <p>Users: 5</p>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>User ID</th>
        <th style="width: 36px;">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($posts as $j):
      ?>
      <tr>
        <td>
        <?php
         echo $j['id'];
         ?>
       </td>
       <td>
         <?php
          echo $j['title'];
           ?>
       </td>
       <td>
         <?php
          echo $j['user_id'];
           ?>
       </td>
       <td>
       <button class="myBtn">edit</button>
       <button class="myBtn">delete</button>
      </td>

     <?php endforeach?>
      </tr>
    </tbody>
  </table>
<p>Posts: 5</p>
        </div>
      </div>
    </main>
    <footer>
      Copyright 2019 || Eco- qozgalys
    </footer>
  </div>
  <script src="js/index.js"></script>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300);
    * {
      box-sizing: border-box;
    }

    a {
      text-decoration: none;
      color: black;
    }

    ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      font-family: "Raleway", sans-serif;
      font-size: 14px;
    }

    .wrapper {
      display: flex;
      background-color: pink;
      flex-grow: 1;
    }
    html{
      font-family:sans-serif;
      line-height:1.15;
      -ms-text-size-adjust:100%;
      -webkit-text-size-adjust:100%
    }
    body{
      margin:0
    }
    menu,article,aside,details,footer,header,nav,section{
      display:block
    }
    h1{
      font-size:2em;
      margin:.67em 0
    }
    a{
      background-color:transparent;
      -webkit-text-decoration-skip:objects
    }
    a:active,a:hover{
      outline-width:0
    }
    b,strong{
      font-weight:bolder
    }

    img{
      border-style:none
    }
    header {
      display: flex;
      height: 65px;
      background-color: #ffffff;
      align-items: center;
      justify-content: space-between;
    }

    .sidebar {
      min-width: 120px;
      background-color: #1f282f;
    }

    .sidebar-list {
      display: flex;
      margin-top: 30px;
      flex-flow: column wrap;
      align-items: center;
      justify-content: center;
    }

    .sidebar-item {
      margin-top: 25px;
      cursor: pointer;
      color: #3a3d46;
      font-size: 24px;
      transition: color 200ms ease;

    }
    .sidebar-item:hover {
      opacity: 0.3;
    }

    .sb-active {
      color: #ffffff;
    }
    /*main content background color*/
    .content {
      width: 100%;
      padding: 50px;
      background-color: #e6e6e6;
    }

    .feed-grid {
      display: flex;
      max-width: 1170px;
      margin: 0 auto;
      flex-flow: row wrap;
      justify-content: center;
      align-content: flex-start;
    }

    .navigation {
      display: flex;
      align-items: center;
    }

    .logotype {
      display: flex;
      width: 120px;
      min-width: 120px;
      height: 65px;
      color: #ffffff;
      background-color: #60C27E;
      font-weight: bold;
      align-items: center;
      justify-content: center;
      text-align:center;
    }

    input[type="search"] {
      display: flex;
      width: 300px;
      height: 15px;
      margin-right: 20px;
      padding: 10px;
      border: 1px solid #e6e6e6;
      border-radius: 5px;
      outline: none;
      font-size: 12px;
      justify-content: flex-end;
    }

    .categories {
      display: flex;
      margin-left: 45px;
    }

    .category-item {
      margin: 0 10px;
    }
    .category-item:hover {
      opacity: 0.5;
    }

    .card {
      position: relative;
      width: 320px;
      height: 320px;
      margin: 7px;
      background-color: #ffffff;
      box-shadow: 0px 0px 10px 0px rgba(110, 123, 140, 0.3);
      flex: auto;
    }
    .card img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
         object-fit: cover;
    }
    .card:nth-child(5) {
      flex: 545px;
    }

    .card-half {
      display: flex;
      width: 320px;
      height: 800px;
      margin: 7px;
      background-color: #ffffff;
      box-shadow: 0px 0px 10px 0px rgba(110, 123, 140, 0.3);
      flex-flow: column wrap;
      justify-content: flex-end;
      flex: auto;
    }

    .wide {
      width: 480px;
    }

    .card-img {
      position: relative;
      height: 160px;
      flex: auto;
    }
    .card-img img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
         object-fit: cover;
    }

    .label {
      position: absolute;
      top: 20px;
      right: 20px;
      color: #fdd701;
      font-size: 20px;
    }

    .card-text {
      padding: 0 20px;
    }
    /*pod-text*/
    .card-text p {
      margin: 0;
      padding: 0 10% 5% 10%;
      color: #888888;
    }
        h4{
          text-align: center;
          width:100%;
          padding: 5% 10% 0 10%;
        }
    .card-tools {
      display: flex;
      height: 50px;
      padding: 15px 20px;
      flex-flow: row wrap;
      align-items: flex-end;
    }

    .tools-item {
      margin-right: 20px;
      cursor: pointer;
      transition: opacity 200ms ease;
    }
    .tools-item:hover {
      opacity: 0.7;
    }

    .tools-count {
      padding: 0 5px;
      color: #888888;
      font-size: 14px;
    }

    .share {
      color: #333333;
    }

    .like {
      color: #df2324;
    }

    .info-center {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      display: flex;
      padding: 0 10px;
      text-align: center;
      color: white;
      /*back of pictures*/
      background: rgba(0, 0, 0, 0.3);
      text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.2);
      font-size: 24px;
      font-weight: bold;
      justify-content: center;
      align-items: center;
    }
    footer{
      width: 100%;
      position: fixed;
      background: #60C27E;
      padding: 10px 0px;
      color: #fff;
      text-align: center;
      bottom: 0;
    }
    /*https://image.flaticon.com/icons/png/512/148/148836.png in case if we will need empty-heart*/
    .add{
      display:flex;
      justify-content:space-between;
      align-items: center;
      border-left: 5px solid #7300e6;
      margin-top:10px;
    }
    .add p{
      text-decoration: none;
      font-family: Arial, Helvetica, sans-serif;
      color:black;
      padding-left:20px;
    }
    #btn{
      font-family: Arial;
      background-color: #7300e6;
      color: white;
      padding: 15px 30px;
      text-align: center;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      border: none;
    }
    #btn:hover{
      background-color: white;
      color: #7300e6;
      border: 1px solid #7300e6;
    }
    .user.html{
      background-image: url("https://image.flaticon.com/icons/svg/61/61456.svg");
    }
    td{
      padding:5px 50px 5px 50px;
      border: none;
    }
    thead{
      background:  #f5f5f5;
      margin:10px;
    }
    tr:hover {
      background-color: #f5f5f5;
      box-shadow: 0px 0px 3px #800080;
    }
    th, td {
      border-bottom: 1px solid #ddd;
    }
    table{
      width:100%;
      padding-top:0;
      margin:0;
      border-collapse: collapse;
    }
    .myBtn{
      background-color: white;
      color: black;
      border: 2px solid #60C27E;
    }
    .myBtn:hover{
      background-color: #60C27E;
      color: white;
    }
  </style>
</body>
</html>
