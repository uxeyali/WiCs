<?php
    $path = "../../";
    
    if(isset($_GET['headline'])) {
        $headline = $_GET['headline'];
    }
    
    try {
        
        $config = parse_ini_file($path . 'config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        $password = $password . "$";
        $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare('DELETE FROM articles WHERE headline = :headline');
        $stmt->execute(['headline' => $headline]);
        
        $pdo = null;
        
        ?>
        
        <div class="row">
            <h1 class="large-12 columns success_header">Article Deleted Successfully</h1>
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
        <h3 class="large-12 columns success_header">An error occurred deleting your article.<br>Please try again.</h3>
    </div>

    <div class="row small-6 medium-5 large-4">
        <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
    </div>
    <?php

    }
?>
