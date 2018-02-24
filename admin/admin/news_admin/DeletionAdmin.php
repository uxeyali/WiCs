<?php
    $path = "../../";
    include "../../admin_head1.html"; 
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/tableFunctions.js"></script>

<?php
    include "../../admin_head2.html"; 
?>



         <div class="row">
        <div class="large-12 columns">



        <h2>Deleting Professor Schedules:</h2><p> Select your name or class from the dropdown and that should display the current entries. Use this info when filling out the rest of the form, as youll need to enter the day of week, and starting time.</p>
        
        <hr>
     
        <h2>To make new Entries:</h2>
            <a href="NEWadmin.php">MAKE ENTRIES HERE</a>
        <hr>
        

        
        
        <form method="get" action="deletedb.php">
            <!-- monday entries-->
            <div class="contain">

                    <span>DELETE FROM</span>
                    <br>
                    Select professor:
                    <select name="prof" onchange="updateTable(this.value)" required>
                        <option value="nina">Nina Marhamati</option>
                        <option value="gerald">Gerald Cichanowski</option>
                        <option value="iyengar">Iyengar Sudharsan</option>
                        <option value="debnath">Narayan Debnath</option>
                        <option value="joan">Joan Francioni</option>
                        <option value="tim">Tim Gegg Harrison</option>
                        <option value="zhang">Mingrui Zhang</option>
                        <option value="234">CS 234/250</option>
                        <option value="275">CS 275</option>
                        <option value="341">CS 341</option>
                        <option value="375">CS 375</option>
                        <option value="313">CS 313</option>

                    </select>
                    <br>
                    Select Day:
                    <select name="day" required>
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">Wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                                 
                    </select>
                    <br>
                    Start Time:
                    <select name="begintime" required>
                        <option value="0">none</option>
                        <option value="2">8:00</option>
                        <option value="3">8:30</option>
                        <option value="4">9:00</option>
                        <option value="5">9:30</option>
                        <option value="6">10:00</option>
                        <option value="7">10:30</option>
                        <option value="8">11:00</option>
                        <option value="9">11:30</option>
                        <option value="10">12:00</option>
                        <option value="11">12:30</option>
                        <option value="12">1:00</option>
                        <option value="13">1:30</option>
                        <option value="14">2:00</option>
                        <option value="15">2:30</option>
                        <option value="16">3:00</option>
                        <option value="17">3:30</option>
                        <option value="18">4:00</option>
                        <option value="19">4:30</option>
                        <option value="20">5:00</option>
                        <option value="21">5:30</option>            
                    </select>
                    <br>
                    
                <input type="submit" value="delete">
                    
            </div> <!-- monday entry 1 -->

                    
                
        </form>
        

        
        <table id="maintable">
          
            
            <tr>
                <th></th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>R</th>
                <th>F</th>
            </tr>
            
            <tr>
                <th>8:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>8:30</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>9:00</th>
    
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>9:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>10:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>10:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>11:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>11:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>12:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>12:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>1:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <th>1:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>2:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>2:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>3:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>3:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>4:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>4:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>5:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>5:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
        
        
        
        </table>
            
            
             </div>
             
             
</div>
  
<?php 
    include "../../admin_footer.html"; 
?>