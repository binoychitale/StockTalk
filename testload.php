
    <?php
            $scrip=$_POST['scrip'];
            $servername="localhost";
                $dbname="stocktalk";
                /*$conn = new mysqli($servername,"host","password",$dbname);*/
            $quer="select * from yahoo.finance.quotes where symbol = '$scrip'";
         //$url = 'https://query.yahooapis.com/v1/public/yql?q='.urlencode($quer).'&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&format=json'; 
          $url="https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%3D%22".$scrip."%22&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&format=json";
        //$url='https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%3D%22goog%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';
        //$url .= "&format=json";
        echo $url;
        //$conn->close();
        ?>
