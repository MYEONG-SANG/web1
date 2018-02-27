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
       <!-- 왜 이런식으로 php 두개로 나누느거지? -->
       <a href ="create.php">create</a>
       <?php if(isset($_GET['id'])) {?>
       <a href ="update.php?id=<?php echo $_GET['id']; ?>">update</a>

    <?php     }?>
    <!-- <li><a href="index.php?id=1" class="saw" id="active">1 in</a></li>
    <li><a href="index.php?id=2" class="saw">2 on</a></li> -->
  </ol>



  <div id ="article">
  <!-- <h2>Welcome to Dictionary</h2> -->
  <!-- <img src="in.jpg"width ="100"> -->
  <?php
    print_title();
    ?>
      <?php
    print_description();

    ?>
    <form action="update_process.php" method="post">
      <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
      <p>
        <input type="text" name="title" placeholder="Title" value="<?php print_title();?>">
      </p>
      <p>
        <textarea name="description" placeholder="Description"><?php   print_description();
         ?></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </div>
</div>

<?php
require_once('view/bottom.php');
 ?>
