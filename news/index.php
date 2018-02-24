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
             <h2>WSU CS Department News</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="<?php print $path; ?>img/line.svg"></div>
    
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
        
        #Function to make a link out of a headline
        function makeLink($headline) {
            $link = str_replace(" ", "%20", $headline);
            $link = './article.php?articlename=' . $link;
            return $link;
        }
        
        try {
            
            $config = parse_ini_file('../admin/config.ini');
            $username = $config['username'];
            $password = $config['password'];
            $db = $config['dbname'];
            $password = $password . "$";
            $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = 'SELECT headline, article_text, article_type AS type, DATE_FORMAT(start_date, \'%M %d, %Y\') AS date FROM articles WHERE DATE(end_date) > DATE(NOW()) AND DATE(start_date) <= DATE(NOW()) ORDER BY start_date DESC ';

            
        ?>

        <div class="article row columns" id="newsarticles" data-equalizer data-equalize-on="large">

        <?php

            $stmt = $pdo->query($stmt);
            foreach ($stmt as $row) {
                $link = str_replace(" ", "%20", $row['headline']);
                $link = "?articlename=" . $link;
                
                switch ($row['type']) {
                    case "announcement":
                        $icon = "<i class=\"fi-megaphone\"></i>";
                        $color = 'yellowbox';
                        break;
                    case "event":
                        $icon = "<i class=\"fi-calendar\"></i>";
                        $color = 'limebox';
                        break;
                    default:
                        $icon = "<i class=\"fi-mail\"></i>";
                        $color = 'tealbox';
                }

        ?>
        <div class="large-6 medium-6 columns">
            <div class="card <?= $color?> newsarticle" data-equalizer-watch>
                <h2><?php print $icon . "\n"; ?></h2>
                <h3 class="headline"><a href="<?php print makeLink($row['headline']); ?>"><?php print $row['headline']; ?></a></h3>
                <p class="date"><?php print $row['date']; ?></p>
                <p class="articletext"><?php print shortenText($row['article_text']); ?></p>
            </div>
        </div>

        <?php
                
            }
        ?>
            
            </div>
            
        <?php

            $pdo = null;

        } catch (PDOException $e) {
        
        ?>
        <div class="row">
            <h3 class="large-12 columns success_header">An error occurred getting the news</h3>
        </div>
        <?php
            
        }
        
        ?>
        
    </main>
    <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/vendor/foundation.min.js"></script>
    <script src="../js/totop.js"></script>
    <script src="js/newslinks.js"></script>
    <!--  End News Page  -->

<?php include $path . "footer.html"; ?>
    
    