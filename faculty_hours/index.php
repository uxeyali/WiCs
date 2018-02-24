<?php
    $path = "../";
    include $path."head1.html";
    
?>

<link rel="stylesheet" type="text/css" href="css/tableStyles.css">

<?php
    $path = "../";
    include $path."head2.html";
    
?>

            
        <div id="main" class="row">
            <div class="large-12 columns">
                <h3>Faculty Schedules: </h3>
                <p>This page contains the schedule information for all of the CS professors. To view a specific Professor's Office and Class hours, select their name from the dropdown menu below.</p>
            </div>
            
            <div id="tableonly">
            <div class="large-12 columns">
        
        <form>
            <select name="users" onchange="updateTable(this.value)">
                <option value="">Select a Professor:</option>
                <option value="nina">Nina Marhamati</option>
                <option value="gerald">Gerald Cichanowski</option>
                <option value="iyengar">Iyengar Sudharsan</option>
                <option value="debnath">Narayan Debnath</option>
                <option value="joan">Joan Francioni</option>
                <option value="tim">Tim Gegg Harrison</option>
                <option value="zhang">Mingrui Zhang</option>

            </select>
        </form>
        
        
        <table id="maintable">
                
            <tr>
                <th class="timerow"></th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>R</th>
                <th>F</th>
            </tr>
            
            <tr>
                <th class="timerow">8:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">8:30</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">9:00</th>
    
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">9:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">10:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">10:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">11:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">11:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">12:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">12:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">1:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <th class="timerow">1:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">2:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">2:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">3:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">3:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">4:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">4:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">5:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th class="timerow">5:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
        
        
        
        </table>
        </div>
        </div>  
       </div>
    







<?php

    $path = "../";

            include $path."footer.html";

    ?>        

    <!--<footer>

        <p>This is a beautiful footer provided by the design team to match the rest of the site!</p>

    </footer>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="../js/vendor/jquery.js"></script>

    
    <script src="../js/vendor/foundation.min.js"></script>

    <script src="../js/vendor/foundation.js"></script>

    <script src="../js/vendor/what-input.js"></script>

    <script src="../js/app.js"></script>
            
    <script src="js/tableFunctions.js"></script>

      

  </body>

</html>
