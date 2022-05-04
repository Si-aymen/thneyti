<?php  
 $connect = mysqli_connect("localhost", "root", "", "thneyti");  
 $query = "SELECT depart, count(*) as number FROM moyen_de_transport GROUP BY depart";  
 $result = mysqli_query($connect, $query);  
 $query2 = "SELECT destination, count(*) as number FROM moyen_de_transport GROUP BY destination";  
 $result2 = mysqli_query($connect, $query2);  
 $query3 = "SELECT disponibilite, count(*) as number FROM moyen_de_transport GROUP BY disponibilite";  
 $result3 = mysqli_query($connect, $query3);  
?>  

 <!DOCTYPE html>  

 <html>  
      <head>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript"> 
            
            google.charts.load("current", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['depart', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["depart"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of depart',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript"> 
            
            google.charts.load("current", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['destination', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["destination"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of destination',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script> 





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript"> 
            
            google.charts.load("current", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['disponibilite', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["disponibilite"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of dispo',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script> 


      </head>  
      <body>  
        <table>
            <tr>
                <th><div id="piechart" style="width: 800px; height: 400px;"></div>  </th>
                <th><div id="piechart2" style="width: 800px; height: 400px;"></div>  </th>

            </tr>
            <tr>
                <th><div id="piechart3" style="width: 800px; height: 400px;"></div>  </th>
            </tr>
        </table>   


           

      </body>  
 </html>