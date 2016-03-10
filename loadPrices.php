<?php
	$object=$_GET;
	$url="https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22";//.YHOO%22%2C%22AAPL%22%2C%22GOOG%22%2C%22MSFT%22)&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=
	
	$i=0;
	for($i=0;$i<sizeof($object)-1;$i++)
	{
		$url.=$object[$i]."%22%2C%22";
	}
	$url.=$object[$i];
	$url.="%22)&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
	echo $url;
?>
