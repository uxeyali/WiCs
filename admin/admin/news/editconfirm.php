<?php
    $path = "../../";
    include $path . "admin_head1.html"; 
?>
    <link rel="stylesheet" href="<?php print $path; ?>../news/css/news.css">
<?php
    include $path . "admin_head2.html"; 
?>

    <!--  Begin Confirmation Page  -->
    <main>
    <?php 

        if(isset($_POST['headline'])) {
            $headline = $_POST['headline'];
        }
        
        if(isset($_POST['oldheadline'])) {
            $oldheadline = $_POST['oldheadline'];
        }
        
        if(isset($_POST['articletype'])) {
            $article_type = $_POST['articletype'];
        }
        
        if(isset($_POST['articletext'])) {
            $article_text = $_POST['articletext'];
        }
        
        if(isset($_POST['startdate'])) {
            $start_date = $_POST['startdate'];
        }
        
        if(isset($_POST['enddate'])) {
            $end_date = $_POST['enddate'];
        }
        

        try {

            $config = parse_ini_file($path . 'config.ini');
            $username = $config['username'];
            $password = $config['password'];
            $db = $config['dbname'];
            $password = $password . "$";
            $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('UPDATE articles SET headline = :headline, article_type = :article_type, article_text = :article_text, start_date = :start_date, end_date = :end_date WHERE headline = :oldheadline');
            $stmt->execute(['headline' => $headline, 'article_type' => $article_type, 'article_text' => $article_text, 'start_date' => $start_date, 'end_date' => $end_date, 'oldheadline' => $oldheadline]);

            $pdo = null;

            ?>

            <div class="row">
                <h1 class="large-12 columns success_header">Article Updated Successfully</h1>
            </div>

            <div class="row small-6 medium-5 large-4">
                <a id="office_button" href="<?php print $path; ?>news/index.php" class="button large expanded">NEWS PAGE</a>
            </div>

            <div class="row small-6 medium-5 large-4">
                <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
            </div>

            <?php

        } catch (PDOException $e) {
        
        ?>
        <div class="row">
            <h3 class="large-12 columns success_header">An error occurred editing your article.<br>Please try again.</h3>
        </div>
        
        <div class="row small-6 medium-5 large-4">
            <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
        </div>
        <?php
            
        }

    ?>    
        
    </main>
    <!--  End Confirmation Page  -->
    
<?php include $path . "admin_footer.html"; ?>