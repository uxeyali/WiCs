<?php
     $path = "../../../";
        include $path.'head1.html';
    ?>

      <!--<link rel="stylesheet" href="css/contact.css">-->

       <?php
        include $path.'head2.html';
    ?>
    <main>

    <!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 columns">
             <h2>MAIL</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../../img/line.svg"></div>
    <div class="row">
        <div class="large12 columns">



<?php
        // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('../../config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
		$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($_POST["submit"])){
            try{
               $id = $_POST["idNumber"];
               $db->query("DELETE FROM `mail` WHERE ID = \"$id\"");
            }
            catch(PDOException $ex){
                print("Whoops, something went wrong.");
            }
        }
		try{
			$rows = $db->query("SELECT * FROM `mail`;");
		}
		catch(PDOException $ex){
    		print("Whoops, something went wrong.");
    	}
		?>
		<?php
		foreach ($rows as $row) { ?>
            <div>
            <?php $id = $row["ID"] ?>
       		<h2><?php print($row["subject"]) ?> </h2>
            <h4>From: <?php print("<a href='mailto:" . $row["email"] . "'>".   $row["name"] . "</a>" ) ?> </h4>
       		<p><?php print($row["message"]) ?> </p>
       		</div>
            <form action="mail.php" method="post">
                <input type="hidden" name="idNumber" value="<?php print($id) ?>">
                <input type="submit" class="button purple-button" name= "submit" value = "DELETE">
            </form>
            <div class="row"><img src="../../../img/line.svg"></div>
            <?php
		} ?>
        </div>
        </div>
    </main>

    <?php
            $path = "../../../";
            include "../../../footer.html";
    ?>

<!--        <p>This is a beautiful footer provided by the design team to match the rest of the site!</p>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          </div>
      </div>
  </body>
</html>
