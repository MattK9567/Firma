<div class="content-wrapper">
    <h2>das</h2>
    <table class="columns">
        <tr>
            <td>
                <?php
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
                            google.charts.load("current", {packages:["corechart"]});
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
                                    title: 'Pomer využívanosti ihrísk.',
                                    width : 700,
                                    height : 500
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                chart.draw(data, options);
                            }
                        </script>
                    </head>
                    <body>
                        <div class="border-right" id="piechart"></div>
                    </body>
                    </html>
            </td>

            <td>
                <?php
                $dbhandle = new mysqli('localhost','root','','sportoviska');
                $query = "SELECT rezervacia.cas AS title, COUNT(rezervacia.cas) AS number
                          FROM rezervacia
                          GROUP BY rezervacia.cas";
                $res = $dbhandle->query($query);
                ?>

                <html>
                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['title','number'],
                                <?php
                                while ($row= $res->fetch_assoc())
                                {
                                    echo "['".$row['title']."',".$row['number']."],";
                                }
                                ?>
                            ]);
                            var options = {
                                title: 'Časy strávené na ihriskách.',
                                curveType: 'function',
                                legend: { position: 'bottom' },
                                width : 700,
                                height : 500
                            };
                            var chart = new google.visualization.BarChart(document.getElementById('barchart_values'));
                            chart.draw(data, options);
                        }
                    </script>
                </head>
                <body>
                <div id="barchart_values"></div>
                </body>
                </html>
            </td>
        </tr>
        <tr>
            <td><?php
                $dbhandle = new mysqli('localhost','root','','sportoviska');
                $query = "SELECT zakaznici.meno AS title, zakaznici.priezvisko, rezervacia.zakaznici_ID, COUNT(rezervacia.zakaznici_ID) AS number
                          FROM rezervacia
                          JOIN zakaznici
                          ON zakaznici.ID = rezervacia.zakaznici_ID
                          GROUP BY rezervacia.zakaznici_ID";
                $res = $dbhandle->query($query);
                ?>
                <section class="content-header">

                    <html>
                    <head>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load("current", {packages:["corechart"]});
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
                                    title: 'Zákazníci používajúci prenájmové plochy.',
                                    pieHole: 0.4,
                                    width : 700,
                                    height : 500
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                chart.draw(data, options);
                            }
                        </script>
                    </head>
                    <body>
                    <div class="border-right" id="donutchart"></div>
                    </body>
                    </html>
            </td>

            <td>
                <?php
                $dbhandle = new mysqli('localhost','root','','sportoviska');
                $query = "SELECT rezervacia.cena AS title, COUNT(rezervacia.cena) AS number
                          FROM rezervacia
                          GROUP BY rezervacia.cena";
                $res = $dbhandle->query($query);
                ?>

                <html>
                <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['title','number'],
                                <?php
                                while ($row= $res->fetch_assoc())
                                {
                                    echo "['".$row['title']."',".$row['number']."],";
                                }
                                ?>
                            ]);
                            var options = {
                                title: 'Najčastejšie ceny.',
                                curveType: 'function',
                                legend: { position: 'bottom' },
                                width : 700,
                                height : 500
                            };
                            var chart = new google.visualization.LineChart(document.getElementById('stock_div'));
                            chart.draw(data, options);
                        }
                    </script>
                </head>
                <body>
                <div id="stock_div"></div>
                </body>
                </html>
            </td>
        </tr>
    </table>
</div>