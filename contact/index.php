
    <?php
     $path = "../";
        include $path.'head1.html';
    ?>

      <link rel="stylesheet" href="css/contact.css">

       <?php
        include $path.'head2.html';
    ?>
    <main>


    <!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 columns">
             <h2>CONTACT US</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../img/line.svg"></div>


     <div class="row">
      <div class="large-6 medium-6 columns">
        <section class="main">
            <!-- php email -->
       <?php
       try {
            $config = parse_ini_file('../admin/config.ini');
            $username = $config['username'];
            $password = $config['password'];
            $db = $config['dbname'];
            // needed because pdo throws a error
            $password = $password . "$";
            $pdo = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            if(isset($_POST['submit'])) {
                if(isset($_POST['name'])) {
                    $name = $_POST['name'];
                }
                if(isset($_POST['email'])) {
                    $email = $_POST['email'];
                }
                if(isset($_POST['subject'])) {
                    $subject = $_POST['subject'];
                }
                if(isset($_POST['message'])) {
                    $message = $_POST['message'];
                }
                
                if($name != null && $email != null && $subject != null && $message != null) {
                    $id = rand(0, 10000);
                }
                
                $stmt = $pdo->prepare('INSERT INTO `Mail`(`ID`, `Name`, `Email`, `Subject`, `Message`) VALUES (:id, :name, :email, :subject, :message)');
                $stmt->execute(['id' => $id, 'name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message]);
                
                $pdo = null;
                
                ?><h3>Your mail was sent successfully!</h3><?
            }
            
        } catch (PDOException $e) {
            
            ?>
            <h3>An error occurred.</h3>
            <?php
            
        }


            //if mail server exists
            /*if(isset($_POST['submit'])){
                $to = "test@winona.edu";
                $from = $_POST['email'];
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                //$subject = "Form submission";
                //$subject2 = "Copy of your form submission";
                $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
                //$message2 = "Here is a copy of your message, " . $name . "\n\n" . $_POST['message'];

                $headers = implode("\r\n", [
                'From: '. $name . ' <'. $from . '>',
                'Reply-To: ' . $from ,
                'X-Mailer: PHP/' . PHP_VERSION
                ]);

                $mail = mail($to,$subject,$message,$headers);
                //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

                if ($mail == 1){
                    echo "Mail sent. Thank you, " . $name . ", we will contact you shortly.";
                }
                else {
                    echo "The mail server isn't implemented yet. Please send a mail via the links on the right.";
                }
            }*/
        ?>

            <!-- Form start -->
        <h2 class="purple">Write A Message</h2>

    <form action="" method="post">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" maxlength="20" class="form-control" name="name" id="name" placeholder="Enter Name" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" maxlength="30" class="form-control" name="email" id="email" placeholder="Enter Email" required>
    </div>

     <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" maxlength="20" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" maxlenth = "300" rows="5" name="message" id="message"></textarea>
    </div>

    <input type="submit" class="button button-purple" name="submit" value="Submit">

    </form>
            <!-- Form end -->

        </section><br>
      </div>
      <div class="large-6 medium-6 columns">
       <br>
        <section class="main purple-div">
        <h3>CONTACT<br>INFORMATION</h3><br>
        <p>

        <p> Computer Science Department <br>
                Winona State University <br>
                PO Box 5838 <br>
                Winona MN 55987
        </p><br><br>
        <p> Contact: <br>
                Tel: (507) 457-5385 <br>
                <a href="mailto:test@winona.edu"><i class="fi-mail"></i> <?php include "deptHead.txt"; ?> - Dept. Chair <br></a>
            <a href="mailto:test@winona.edu"><i class="fi-mail"></i> <?php include "officeMngr.txt"; ?> - Office Manager </a>
        </p>

        </section><br>
      </div>
    </div>

    <!-- DIVIDER -->
     <div class="row"><img src="../img/line.svg"></div>
    <div class="row">
      <div class="large-12 columns">
        <h2 class="purple center">Directions</h2>
        <section class="main map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2867.6997768564697!2d-91.6465571!3d44.0482568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f96d07038b0d83%3A0xa0ef0459561d57d8!2sWatkins+Hall%2C+W+9th+St%2C+Winona%2C+MN+55987!5e0!3m2!1sen!2sus!4v1480375282800" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section><br>
      </div>
    </div>
        <p>
            <a href="#" class="back-to-top" class=""></a>
        </p>
    </main>

    <?php
            $path = "../";
            include "../footer.html";
    ?>

<!--        <p>This is a beautiful footer provided by the design team to match the rest of the site!</p>-->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/totop.js"></script>
          </div>
      </div>
  </body>
</html>
