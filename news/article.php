<?php
    $path = "../";
    include $path . "head1.html"; 
?>
    <link rel="stylesheet" href="css/news.css">
<?php
    include $path . "head2.html"; 
?>
    
    <!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="<?php print $path; ?>img/news.png">
             <h2><a href="index.php">Back to News Page</a></h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="<?php print $path; ?>img/line.svg"></div>
    
    <!--  Begin article page  -->
    <main>

        <?php
        
        #Function to convert text newlines into HTML newlines
        function convertNewlines($str) {
            $str = str_replace("\n", "<br>", $str);
            return $str;
        }
        
        try {
        
            $config = parse_ini_file('../admin/config.ini');
            $username = $config['username'];
            $password = $config['password'];
            $db = $config['dbname'];
            $password = $password . "$";
            $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_GET['articlename'])) {
                $articlename = $_GET['articlename'];
            } else {
                throw new Exception("No article specified");
            }
            
            $stmt = $pdo->prepare('SELECT headline, article_text, DATE_FORMAT(start_date, \'%M %d, %Y\') AS date FROM articles WHERE headline = :articlename');
            $stmt->execute(['articlename' => $articlename]);
            foreach ($stmt as $row) {
                $articletext = convertNewlines($row['article_text']);
            
        ?>

        <div class="article">
            <h1 id="headline"><?php print $row['headline']; ?></h1>
            <p><?php print $articletext; ?></p>
            <p>Published on: <?php print $row['date']; ?></p>
        </div>

        <?php
            
            }
            
            $pdo = null;
            
        } catch (PDOException $e) {
        
        ?>
        <div class="row">
            <h3 class="large-12 columns success_header">An error occurred getting the news</h3>
        </div>
        <?php
            
        } catch (Exception $ane) {
            
        ?>
        <div class="row">
            <h3 class="large-12 columns success_header">No article specified</h3>
        </div>
        <?php
        
        }
        
    ?>
        
    </main>
    <!--  End article page  -->
    
<?php include $path . "footer.html" ?>
