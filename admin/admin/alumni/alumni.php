
    <?php
     $path = "../../";
        include '../../admin_head1.html';
    ?>
      
    <link rel="stylesheet" href="../../../css/app.css">
       
       <?php
        include '../../admin_head2.html';
    ?>
    <main>
    
    <!-- BANNER SECTION -->
    <?php
        if(isset($_POST["submit1"])){
            $emerti = $_POST["faculty"];
            $myfile = fopen("../../../history/emerti.txt", "w+") or die("Unable to open file!");
            echo fwrite($myfile, $emerti);
            fclose($myfile); 
        }
        if(isset($_POST["submit2"])){
            $alum = $_POST["alum"];
            $myfile = fopen("../../../history/alum.txt", "w+") or die("Unable to open file!");
            echo fwrite($myfile, $alum);
            fclose($myfile); 
        }
        if(isset($_POST["submit3"])){
            $deptHead = $_POST["dept"];
            $myfile = fopen("../../../contact/deptHead.txt", "w+") or die("Unable to open file!");
            echo fwrite($myfile, $deptHead);
            fclose($myfile); 
        }
        if(isset($_POST["submit4"])){
            $manager = $_POST["manager"];
            $myfile = fopen("../../../contact/OfficeMngr.txt", "w+") or die("Unable to open file!");
            echo fwrite($myfile, $manager);
            fclose($myfile); 
        } 
    ?>
     
    <div class="row">
      <div class="large-12 columns">
        <div>
            <section>
                <form method="post" action="alumni.php">
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Emerti</label>
                            <textarea cols="10" rows="10" name="faculty" id="faculty"><?php include '../../../history/emerti.txt' ?></textarea>
                        </div>
                    </div>
                    <input type="submit" value="submit" id="submit1" name="submit1" class="button button-green">
                </form>
               <img src="../../../img/line.svg">
                <form method="post" action="alumni.php">
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Alumni</label>
                            <textarea cols="10" rows="10" name="alum" id="alum"><?php include '../../../history/alum.txt' ?>
                            </textarea>
                        </div>
                    </div>
                    <input type="submit" value="submit" name="submit2" class="button button-orange">
                </form>
                <img src="../../../img/line.svg">
                <form method="post" action="alumni.php">
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Department Chair</label>
                            <textarea cols="10" rows="5" name="dept"  id="dept"><?php include '../../../contact/deptHead.txt' ?></textarea>
                        </div>
                    </div>
                    <input type="submit" value="submit" name="submit3" class="button button-yellow">
                </form>
                <img src="../../../img/line.svg">
                <form method="post" action="alumni.php">
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Office Manager</label>
                            <textarea cols="10" rows="5" name="manager" id="manager"><?php include '../../../contact/officeMngr.txt' ?></textarea>
                        </div>
                    </div>
                    <input type="submit" value="submit" name="submit4" class="button button-teal">
                </form>
                
                <img src="../../../img/line.svg">
            </section>
          </div>
        </div>
    </div>
        <br>
    <!-- DIVIDER -->
    
    
    </main>
    
    <?php
            include "../../admin_footer.html";
    ?>        
    
<!--        <p>This is a beautiful footer provided by the design team to match the rest of the site!</p>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          </div>
      </div>
  </body>
</html>
