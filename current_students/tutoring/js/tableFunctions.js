
            var f = [];
            var r = [];
            var w = [];
            var t = [];
            var m = [];
   
            var allprofessorinfo = [];
           


   
            $(document).ready(function() {
               
                
                $.get("dbquery.php", function(data, status){
                    
                  
                 
                  
                        
                    allprofessorinfo = data.split("&");
             
                    
                

                });
                
                
            });
            
   

     
            function resettable() {
         
                    
                $("table").empty();
                $("table").append("<tr><th></th><th>M</th><th>T</th><th>W</th><th>R</th><th>F</th></tr><tr><th>8:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>8:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>9:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>9:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>10:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>10:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>11:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>11:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>12:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>12:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>1:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>1:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>2:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>2:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>3:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>3:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>4:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>4:30</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>5:00</th><td></td><td></td><td></td><td></td><td></td></tr><tr><th>5:30</th><td></td><td></td><td></td><td></td><td></td></tr>");
                                       
                
                
         
            
                
            }
          
 



            function updateTable(s) {
                
                resettable();
                
               
                m = [];
                t = [];
                w = [];
                r = [];
                f = [];
                
                if (s == "nina") {
                    fillArrays(allprofessorinfo[0]);
                }
                
                if (s == "gerald") {
                    fillArrays(allprofessorinfo[1]);
                }
                
                if (s == "iyengar") {
                    fillArrays(allprofessorinfo[2]);
                }
                
                if (s == "debnath") {
                    fillArrays(allprofessorinfo[3]);
                } 
                
                if (s == "joan") {
                    fillArrays(allprofessorinfo[4]);
                }
                
                if (s == "tim") {
                    fillArrays(allprofessorinfo[5]);
                }
                
                if (s == "zhang") {
                    fillArrays(allprofessorinfo[6]);
                }
                
                if (s == "234") {
                    fillArrays(allprofessorinfo[7]);
                }
                
                if (s == "275") {
                    fillArrays(allprofessorinfo[8]);
                }
                
                if (s == "341") {
                    fillArrays(allprofessorinfo[9]);
                }
                
                if (s == "375") {
                    fillArrays(allprofessorinfo[10]);
                }
                
                if (s == "313") {
                    fillArrays(allprofessorinfo[11]);
                }
               
                
                
                populatecolumns();
                
                
            }
            
            function fillArrays(x) {
                
                var tableentries = x.split("*");
             
              
                tableentries.splice(tableentries.length, 1);
                
                for (y = 0; y < tableentries.length-1; y++) { 
                    var tokens = tableentries[y].split(",");
                  
                    if (tokens[0] == "monday") {
                        m.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3])});
                    }
                    
                    if (tokens[0] == "tuesday") {
                        t.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3])});
                    }
                    
                    if (tokens[0] == "wednesday") {
                        w.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3])});
                    }
                    
                    
                    if (tokens[0] == "thursday") {
                        r.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3])});
                    }
                    
                    if (tokens[0] == "friday") {
                        f.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3])});
                    }
                    
                    
                }
                
            }
            
            
            
            function populatecolumns() {
              
                for (y = 0; y < f.length; y++) { // for each item in the friday list
                    
                    
                    for (z = 1; z < f[y].width; z++) { // remove the tds below the spot, otherwise cells will get pushed out of the table
                         $("table tr:nth-child(" + (f[y].spot+z) + ") td").first().remove();
                    }
                    
                    
                    $("table tr:nth-child(" + f[y].spot + ") td:nth-child(" + 6 + ")").text(f[y].text); //set the text on the correct td

                    $("table tr:nth-child(" + f[y].spot + ") td:nth-child(" + 6 + ")").attr("rowSpan", f[y].width); //set the size, it will just fill in the cleared spots we deleted earlier
                    
                    $("table tr:nth-child(" + f[y].spot + ") td:nth-child(" + 6 + ")").css("background-color", "lightgrey"); // give it a background color
                    
                   

                } // add friday blocks
                          
                for (y = 0; y < r.length; y++) { // iterate through monday array, if the spot matches x
                    
                    
                    for (z = 1; z < r[y].width; z++) {
                         $("table tr:nth-child(" + (r[y].spot+z) + ") td").first().remove();
                        
                    }
                    
                    
                    $("table tr:nth-child(" + r[y].spot + ") td:nth-child(" + 5 + ")").text(r[y].text);

                    $("table tr:nth-child(" + r[y].spot + ") td:nth-child(" + 5 + ")").attr("rowSpan", r[y].width);
                    
                    $("table tr:nth-child(" + r[y].spot + ") td:nth-child(" + 5 + ")").css("background-color", "lightgrey"); // give it a background color
                    
                
                } //add thursday blocks
                
                for (y = 0; y < w.length; y++) { // iterate through monday array, if the spot matches x
                    
                    
                    for (z = 1; z < w[y].width; z++) {
                         $("table tr:nth-child(" + (w[y].spot+z) + ") td").first().remove();
                    }
                    
                    
                    $("table tr:nth-child(" + w[y].spot + ") td:nth-child(" + 4 + ")").text(w[y].text);

                    $("table tr:nth-child(" + w[y].spot + ") td:nth-child(" + 4 + ")").attr("rowSpan", w[y].width);
                    
                    $("table tr:nth-child(" + w[y].spot + ") td:nth-child(" + 4 + ")").css("background-color", "lightgrey"); // give it a background color
                    
                 
                   

                } // add wednesday blocks
                
                for (y = 0; y < t.length; y++) { // iterate through monday array, if the spot matches x
                    
                    
                    for (z = 1; z < t[y].width; z++) {
                         $("table tr:nth-child(" + (t[y].spot+z) + ") td").first().remove();
                    }
                    
                    
                    $("table tr:nth-child(" + t[y].spot + ") td:nth-child(" + 3 + ")").text(t[y].text);

                    $("table tr:nth-child(" + t[y].spot + ") td:nth-child(" + 3 + ")").attr("rowSpan", t[y].width);
                    
                    $("table tr:nth-child(" + t[y].spot + ") td:nth-child(" + 3 + ")").css("background-color", "lightgrey"); // give it a background color

                    
                   

                } // add wednesday blocks
                              
                for (y = 0; y < m.length; y++) { // iterate through monday array, if the spot matches x
                    
                    
                    for (z = 1; z < m[y].width; z++) {
                         $("table tr:nth-child(" + (m[y].spot+z) + ") td").first().remove();
                    }
                    
                    
                    $("table tr:nth-child(" + m[y].spot + ") td:nth-child(" + 2 + ")").text(m[y].text);

                    $("table tr:nth-child(" + m[y].spot + ") td:nth-child(" + 2 + ")").attr("rowSpan", m[y].width);
                    
                    $("table tr:nth-child(" + m[y].spot + ") td:nth-child(" + 2 + ")").css("background-color", "lightgrey"); // give it a background color

                    
                   

                } // add monday blocks
                
               
            
            
            }
               
            