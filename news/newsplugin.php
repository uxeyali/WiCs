<?php
    #News feed plugin for the main page
    
    #Function to shorten the article text so the page isn't cluttered
    function shortenText($text) {
        if (strlen($text) > 100) {
            $text_split = explode(" ", $text);
            $shortened = array_slice($text_split, 0, 10);
            $new_text = implode(" ", $shortened) . "...";
            return $new_text;
        } else {
            return $text;
        }
    }
    
    #Function to make a link out of a headline
    function makeLink($headline) {
        $link = str_replace(" ", "%20", $headline);
        $link = 'news/article.php?articlename=' . $link;
        return $link;
    }

    try {
        
        $config = parse_ini_file('admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        $password = $password . "$";
        $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        #Get the articles
        $stmt = "SELECT headline, article_type AS type, article_text AS text FROM articles WHERE DATE(end_date) > DATE(NOW()) AND DATE(start_date) <= DATE(NOW()) ORDER BY start_date DESC LIMIT 3";
        
        ?>
        
        <div class="row" id="newsarticles">
        
        <?php
        
        $stmt = $pdo->query($stmt);
        $numRows = $stmt->rowCount();
        $articlenum = 1;
        foreach ($stmt as $card) {
            switch ($card['type']) {
                case "announcement":
                    $icon = '<i class="fi-megaphone" style="font-size: 2.5em"></i>';
                    $color = 'yellowbox';
                    break;
                case "event":
                    $icon = '<i class="fi-calendar" style="font-size: 2.5em"></i>';
                    $color = 'limebox';
                    break;
                default:
                    $icon = '<i class="fi-mail"></i>';
                    $color= 'tealbox';
            }
        ?>
            
            <div class="medium-<?php print 12 / $numRows; ?> columns newsbox data-equalizer data-equalize-on="large">
           
            <div class="profile-card <?= $color ?> data-equalizer-watch">
            
                <div class="profile-info">
                    <a href="<?php print makeLink($card['headline']); ?>" ><?php print $icon . "\n"; ?></a>
                    <a href="<?php print makeLink($card['headline']); ?>"><h4><?php print $card['headline']; ?></h4></a>
                    <p><?php print shortenText($card['text']); ?></p>

                </div>
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
        <h3 class="large-12 columns">An error occurred getting the news</h3>
    </div>
    <?php

    }
?>