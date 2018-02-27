<?php
require_once('lib/print.php');
require_once('view/head.php');
 ?>

  <h1><a href="index.php"title=home>new dictionary</a></h1>

  <input type ="button" value ="night" onclick="
  nightdayhandler(this);
  ">


  <div id="grid">

  <ol>
    <h3>preposition </h3>



      <?php
        print_list();

          // var_dump($List);
        // echo "<li>$List[0]</li>\n";
        // echo "<li>$List[1]</li>\n";
        // echo "<li>$List[2]</li>\n";
        // echo "<li>$List[3]</li>\n";
       ?>


    <!-- <li><a href="index.php?id=1" class="saw" id="active">1 in</a></li>
    <li><a href="index.php?id=2" class="saw">2 on</a></li> -->
  </ol>
  <a href = "create.php">create </a>
  <form action="create_process.php" method="post">
    <p>
      <input type="text" name="title" placeholder="Title">
    </p>
    <p>
      <textarea name="description" placeholder="Description"></textarea>
    </p>
    <p>
      <input type="submit">
    </p>
  </form>
  <div id ="article">
  <!-- <h2>Welcome to Dictionary</h2> -->
  <!-- <img src="in.jpg"width ="100"> -->

  </div>
</div>
<?php
require_once('view/bottom.php');
 ?>
