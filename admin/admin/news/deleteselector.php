<?php
    $path = "../../";
    include $path . "admin_head1.html"; 
?>
    <link rel="stylesheet" href="<?php print $path; ?>../news/css/news.css">
<?php
    include $path . "admin_head2.html"; 
?>
    
    <!-- BANNER SECTION -->
    <div class="banner row">
        <div class="image large-12 large-centered columns">
            <img src="<?php print $path; ?>../img/News.png">
            <h2>Delete Article</h2>
        </div>
    </div>
    <!-- DIVIDER -->
    <div class="row"><img src="<?php print $path; ?>../img/line.svg"></div>
    
    <!--  Begin News Page  -->
    <main>
        <?php
            
        #Function to shorten the article text so the page isn't cluttered
        function shortenText($text) {
            if (strlen($text) > 300) {
                $text_split = explode(" ", $text);
                $shortened = array_slice($text_split, 0, 50);
                $new_text = implode(" ", $shortened) . "...";
                return $new_text;
            } else {
                return $text;
            }
        }
        
        #Function to make a link out of a headline, with link type (optional)
        function makeLink($headline, $type = 'article') {
            $link = str_replace(" ", "%20", $headline);
            switch ($type) {
                case 'edit':
                    $link = './editarticle.php?articlename=' . $link;
                    break;
                case 'delete':
                    $link = './deleteconfirm.php?articlename=' . $link;
                    break;
                default:
                    $link = '../../news/article.php?articlename=' . $link;
            }
            return $link;
        }
        
        try {
            
            $config = parse_ini_file($path . 'config.ini');
            $username = $config['username'];
            $password = $config['password'];
            $db = $config['dbname'];
            $password = $password . "$";
            $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            #List only current articles
            $stmt = 'SELECT headline, article_text, article_type AS type, DATE_FORMAT(start_date, \'%M %d, %Y\') AS date FROM articles WHERE DATE(end_date) > DATE(NOW()) ORDER BY start_date DESC ';

        ?>

        <div class="article row">

        <?php

            $stmt = $pdo->query($stmt);
            foreach ($stmt as $row) {
                $link = str_replace(" ", "%20", $row['headline']);
                $link = "?articlename=" . $link;
                
                switch ($row['type']) {
                    case "announcement":
                        $icon = "<i class=\"fi-megaphone\"></i>";
                        break;
                    case "event":
                        $icon = "<i class=\"fi-calendar\"></i>";
                        break;
                    default:
                        $icon = "<i class=\"fi-mail\"></i>";
                }

        ?>

        <div class="card">
            <h2><?php print $icon . "\n"; ?></h2>
            <h3 class="headline"><a href="<?php print makeLink($row['headline'], 'delete'); ?>"><?php print $row['headline']; ?></a></h3>
            <p><?php print $row['date']; ?></p>
            <p class="articletext"><?php print shortenText($row['article_text']); ?></p>
            <p><a href="<?php print makeLink($row['headline'], 'delete'); ?>">Delete</a></p>
        </div>

            <br>

        <?php
                
            }
            
        ?>
            
        </div>
        
        <div class="row small-6 medium-5 large-4">
            <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
        </div>
            
        <?php

            $pdo = null;

        } catch (PDOException $e) {
        
        ?>
        <div class="row">
            <h3 class="large-12 columns success_header">An error occurred getting the news</h3>
        </div>
        
        <div class="row small-6 medium-5 large-4">
            <a id="office_button" href="../news/index.php" class="button large expanded">NEWS ADMIN PAGE</a>
        </div>
        <?php
            
        }
        
        ?>
        
    </main>
    <!--  End News Page  -->
    
<?php include $path . "admin_footer.html"; ?>
   