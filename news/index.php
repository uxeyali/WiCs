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
             <img src="<?php print $path; ?>img/3women-24.png">
             <h2>WiCS Events</h2>
         </div>
     </div>

    <!--  Begin News Page  -->
    <main>
        
         <div class="row">
      <div class="large-12 columns">
            <section class="main">
                <p> If you are interested in joining us for any event and want more information, please contact club president, Uzma, for more information.
                </p>
          </section>
            </div>
        </div>
        
        <div class="row">
      <div class="large-12 columns">
            <section class="main">
            <div class="row"><img src="../img/line.svg"></div>
                <h3 class="purple">Biweekly Meetings</h3>
                <br>
                <p> We hold every alternate weeks on Thursdays at 6 PM in Watkins 209. At these meeting, we work on interesting activities and projects such as 3-D printing, wearable technology, and VR. Plus, there are snacks!
                </p>
                <p>Our next meeting will be on March 1, 2018.                
                </p>
          </section>
            </div>
        </div>
        
        
         <div class="row">
      <div class="large-12 columns">
            <section class="main">
            <div class="row"><img src="../img/line.svg"></div>
                <h3 class="teal">Women Leading in Technology</h3>
                <br>
                <p>The Mayo Clinic has invited us to attend the Minnesota High Tech Association's newtworking event in Spring Valley. Students will be able to meet women working in leadership positions in the field of technology. There will be a number of local tech companies represented who will be of interested to WiCS students.
                </p>
                <p>March 13, 2018 - Students will be leaving Winona State at 3:30 PM. 
                </p>
          </section>
            </div>
        </div>
        
        
        <div class="row">
      <div class="large-12 columns">
            <section class="main">
            <div class="row"><img src="../img/line.svg"></div>
                <h3 class="green">GLOW STEM Panel</h3>
                <br>
                <p>On March 17, 2018, Winona State will be hosting Greater Leadership Opportunities for Women. A panel of twelve women from Mayo Clinic who will be giving presentations on their areas of expertise. Their presentations will focus on empowering women in STEM fields from IT to biomedical research.
                </p>
                <p>The presentations will be between 10 AM and 1 PM in the Business Engagement Center.
                </p>
          </section>
            </div>
        </div>
        
        
        
</main>
        
        
        
        
         <div class="banner row">
         <div class="image large-12 large-centered columns">
             <h2>Past Events</h2>
         </div>
     </div>

    <!--  Begin News Page  -->
    <main>
        
        
        <div class="row">
      <div class="large-12 columns">
            <section class="main">
            <div class="row"><img src="../img/line.svg"></div>

                <h3 class="purple">Winona State Hackathon</h3>
                <div class="banner image large-12 large-centered columns">
                <img src="<?php print $path; ?>img/Hackathon_Group.jpg" width="50%">
                    </div>

                <br>
                <p> WiCS worked together on this website at the Hackathon on February 24, 2018. This was a great day filled with fun, friends, and coding.
                </p>
                <p>This Hackathon is an annual event hosted by Winona State. In the future, WiCS will also be participating in other hackathon events.                
                </p>
          </section>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--
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
-->
        
    </main>
    <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/vendor/foundation.min.js"></script>
    <script src="../js/totop.js"></script>
    <script src="js/newslinks.js"></script>
    <!--  End News Page  -->

<?php include $path . "footer.html"; ?>
    
    