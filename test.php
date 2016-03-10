<html>
<body>
<?php
    $stockList = "GOOG,YHOO,T,AAPL";
    $stockFormat = "snl1d1t1c1hgw";
    $host = "http://quote.yahoo.com/d/quotes.csv";
    $requestUrl = $host."?s=".$stockList."&amp;amp;amp;amp;f=".$stockFormat."&amp;amp;amp;amp;e=.csv";
 
// Pull data (download CSV as file)
    $filesize=2000;
    $handle = fopen($requestUrl, "r");
    $raw = fread($handle, $filesize);
    fclose($handle);
 
    // Split results, trim way the extra line break at the end
    $quotes = explode("\n",trim($raw));
 
    foreach($quotes as $quoteraw) {
    $quoteraw = str_replace(", I", " I", $quoteraw);
    $quote = explode(",", $quoteraw);
 
    echo $quote[2]."
    "; 
    }
?>
</body>
</html>