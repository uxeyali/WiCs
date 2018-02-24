 
            
            var dbresults = "";
            
            function gethours(str) {
                
                resettable();
                console.log(str);
               
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } 
                
                xmlhttp.onreadystatechange = function() {
                
                    if (this.readyState == 4 && this.status == 200) {
                        dbresults += this.responseText;
                        
                        parseQueryResults(dbresults);
                        
                        populatecolumns();
                    
                    }
                };
                xmlhttp.open("GET","dbquery.php?q="+str,true);
                xmlhttp.send();
                
            }
     
            function resettable() {
                
                m = [];
                t = [];
                w = [];
                r = [];
                f = [];
                
                dbresults = "";
               
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } 
                
                xmlhttp.onreadystatechange = function() {
                
                    if (this.readyState == 4 && this.status == 200) {
                       
                        $("#maintable").html(this.responseText);
                        
                    
                    }
                };
                xmlhttp.open("GET","blanktable.php",true);
                xmlhttp.send();
                
            }
          
            
      
            

            
            
            
            
            var f = [];
            var r = [];
            var w = [];
            var t = [];
            var m = [];
   
           
   
            $(document).ready(function() {
               
                
                
            });
            
            
      
            
            function parseQueryResults(x) {
                
                
                var tableentries = x.split("*");
             
                console.log(tableentries);
                
                tableentries.splice(tableentries.length, 1);
                
                for (y = 0; y < tableentries.length-1; y++) { 
                    var tokens = tableentries[y].split(",");
                    console.log(tokens);
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
               
            