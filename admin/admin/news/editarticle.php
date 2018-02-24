<?php
    $path = "../../";
    include $path . "admin_head1.html"; 
?>
    <link rel="stylesheet" href="<?php print $path; ?>css/admin.css">
    <link rel="stylesheet" href="<?php print $path; ?>../news/css/news.css">
<?php
    include $path . "admin_head2.html"; 
?>
    
    <!--  Begin Edit Page  -->
    <main>
    <h2 class="admin-header">Edit News Article</h2>
    <form action="editconfirm.php" method="post">
    <?php
    
        if(isset($_GET['articlename'])) {
            $headline = $_GET['articlename'];
        }
    
        try {

            $config = parse_ini_file($path . 'config.ini');
            $username = $config['username'];
            $password = $config['password'];
            $db = $config['dbname'];
            $password = $password . "$";
            $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('SELECT headline, article_type, article_text, start_date, end_date FROM articles WHERE headline = :headline');
            $stmt->execute(['headline' => $headline]);
            
            $data = $stmt->fetch();

            $pdo = null;
            
            ?>
        
            <div class="row">
                <h4 class="large-12 columns">Article Type:</h4>
            </div>

            <div class="row">
                <label class="large-2 columns"><input type="radio" name="articletype" value="announcement" <?php if($data['article_type'] == 'announcement') {print 'checked';} ?>>Announcement</label>

                <label class="large-10 columns"><input type="radio" name="articletype" value="event" <?php if($data['article_type'] == 'event') {print 'checked';} ?>>Event</label>
            </div>

            <div class="row">
                <h4 class="large-8 columns">Headline:</h4>
            </div>
            <div class="row">
                <input class="large-8 columns" type="text" name="headline" value="<?php print $data['headline']; ?>" required>
            </div>

            <div class="row">
                <h4 class="large-8 columns">Article Text:</h4>
            </div>
            <div class="row">
                <textarea class="large-12 columns" rows="5" name="articletext" required><?php print $data['article_text']; ?></textarea>
            </div>

            <div class="row">
                <div class="large-6 columns">
                    <h4>Start Date:</h4>
                    <input type="date" name="startdate" value="<?php print $data['start_date']; ?>" ><span class="input-desc"><p>(Optional)</p></span>
                </div>

                <div class="large-6 columns">
                    <h4>End Date:</h4>
                    <input type="date" name="enddate" value="<?php print $data['end_date']; ?>" required>
                </div>
            </div>

            <input type="text" name="oldheadline" value="<?php print $data['headline']; ?>" class="hidden-input" readonly>

            <div class="row small-6 medium-5 large-4">
                <input id="office_button" class="button button-purple large expanded" type="submit" value="EDIT NEWS ARTICLE">
            </div>
            </form>
        
            <?php

        } catch (PDOException $e) {
        
        ?>
        <div class="row">
            <h3 class="large-12 columns success_header">An error occurred retreiving your article.<br>Please try again.</h3>
        </div>

        <div class="row small-6 medium-5 large-4">
            <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
        </div>
        <?php

        }
        
    ?>
    
        
    
    </main>
    <!--  End Edit Page  -->
    
<?php include $path . "admin_footer.html"; ?>