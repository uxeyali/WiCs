<?php
    $path = "../../";
    include $path . "admin_head1.html"; 
?>
    <link rel="stylesheet" href="<?php print $path; ?>../news/css/news.css">
<?php
    include $path . "admin_head2.html"; 
?>

    <!--  Begin Confirm Page  -->
    <main>
    <?php
        if(isset($_POST['headline'])) {
            $headline = $_POST['headline'];
        }
        
        if(isset($_POST['articletype'])) {
            $articletype = $_POST['articletype'];
        }
        
        if(isset($_POST['articletext'])) {
            $articletext = $_POST['articletext'];
        }
        
        if(isset($_POST['enddate'])) {
            $enddate = $_POST['enddate'];
        }
        
        if(isset($_POST['startdate'])) {
            if($_POST['startdate'] == null) {
                $startdate = date("Y-m-d");
            } else {
                $startdate = $_POST['startdate'];
            }
        }
        
        
        try {
        
            $config = parse_ini_file($path . 'config.ini');
            $username = $config['username'];
            $password = $config['password'];
            $db = $config['dbname'];
            $password = $password . "$";
            $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $pdo->prepare('INSERT INTO articles (headline, article_type, article_text, start_date, end_date) VALUES (:headline, :articletype, :articletext, :startdate, :enddate)');
            $stmt->execute(['headline' => $headline, 'articletype' => $articletype, 'articletext' => $articletext, 'startdate' => $startdate, 'enddate' => $enddate]);
            
            $pdo = null;
            
            ?>
        
            <div class="row">
                <h1 class="large-12 columns success_header">Article Added Successfully</h1>
            </div>

            <div class="row small-6 medium-5 large-4">
                <a id="office_button" href="<?php print $path; ?>../news/index.php" class="button large expanded">NEWS PAGE</a>
            </div>

            <div class="row small-6 medium-5 large-4">
                <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
            </div>

            <?php
            
        } catch (PDOException $e) {
        
        ?>
        <div class="row">
            <h3 class="large-12 columns success_header">An error occurred submitting your article.<br>Please try again.</h3>
        </div>
        
        <div class="row small-6 medium-5 large-4">
            <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
        </div>
        <?php
            
        }
    ?>
    
    </main>
    <!--  End Confirm Page  -->
    
<?php include $path . "admin_footer.html"; ?>
