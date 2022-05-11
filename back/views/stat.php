<?php  
 $connect = mysqli_connect("localhost", "root", "", "thneyti");  
 $query = "SELECT depart, count(*) as number FROM moyen_de_transport GROUP BY depart";  
 $result = mysqli_query($connect, $query);  
 $query2 = "SELECT destination, count(*) as number FROM moyen_de_transport GROUP BY destination";  
 $result2 = mysqli_query($connect, $query2);  
 $query3 = "SELECT disponibilite, count(*) as number FROM moyen_de_transport GROUP BY disponibilite";  
 $result3 = mysqli_query($connect, $query3);  
?>  


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
</head>
<style>
      div {
        margin-bottom: 10px;
        margin-right : 100px;
      }
      label {
        display: inline-block;
        width: 150px;
        text-align: right;
      }
      form {
  text-align: center;

}

table {
  
 top: 100px;
  left : 500px;
}
    </style>

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



<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>Clients</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>Reclamations</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>


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

