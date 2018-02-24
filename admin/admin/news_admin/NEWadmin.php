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


        <h2>Adding Professor Schedules:</h2><p> Make SURE that youve selected the correct professor, day of the week, and begin/end times.<br>
        In the text field you should only put a class (all caps and the class number, such as "CS 313") or the phrase "Office Hours".
        When you submit it with the "add" button, you will be taken to a blank page that links back to this one. Click on the link when you are taken to this page.</p>
        
        <hr>
        <h2>Adding Tutor Schedules:</h2><p> Make SURE that youve selected the correct class, day of the week, and begin/end times.<br>
        In the text field you should only put a room number in all caps such as "Watkins 102"</p>
        
        <hr>
        <h2>Viewing current schedule:</h2><p>When you select your name or class in the form, the current state of your schedule will appear in the table. This is to help you keep track of what youve currently added.</p>
        
        <hr>
        <h2>To Delete entries:</h2>
            <a class="medium button button-lime special-button" href="DeletionAdmin.php">DELETE ENTRIES HERE</a>
        <hr>

        
        
        <form method="get" action="writetodb.php">
            <!-- monday entries-->
            <div class="contain">

                    <span>Data Entry</span>
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
                    End Time:
                    <select name="endtime" required>
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

                    Text:
                    <input type="text" name="text" required>
                
                    <br>
                
                    <input class="medium button button-lime special-button" type="submit" value="Add" required>
                
                    
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


