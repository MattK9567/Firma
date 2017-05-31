<div class="content-wrapper">
    <h2>das</h2>
    <table class="columns">
        <tr>
            <td><?php
                $dbhandle = new mysqli('localhost','root','','sportoviska');
                $query = "SELECT sportoviska.nazov as title, rezervacia.sportoviska_ID, COUNT(rezervacia.ID) as number
                          FROM rezervacia 
                          JOIN sportoviska
                          ON sportoviska.ID = rezervacia.sportoviska_ID
                          GROUP BY sportoviska.nazov";
                $res = $dbhandle->query($query);
                ?>
                <section class="content-header">

                    <html>
                    <head>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load("current", {packages:["piechart"]});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['title', 'number'],
                                    <?php
                                    while ($row= $res->fetch_assoc())                        {
                                        echo "['".$row['title']."',".$row['number']."],";
                                    }
                                    ?>
                                ]);
                                var options = {
                                    title: 'Count of lectors per agency',
                                    pieHole: 0.4,
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                chart.draw(data, options);
                            }
                        </script>
                    </head>
                    <body>
                        <div class="border-right" id="donutchart" style="width: 800px; height: 400px;"></div>
                    </body>
                    </html>
            </td>
        </tr>
    </table>
</div>