<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
exit('hsdfs');
$path = "http://www.mylottoadserv.com/Services/GetDrawInfo.ashx?format=rss&feedtype=results&aff=38997&lotteryid=0&lang=EN";
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$path);
curl_setopt($ch, CURLOPT_FAILONERROR,1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
$retValue = curl_exec($ch);          
curl_close($ch);
 $oXML = new SimpleXMLElement($retValue);
 //exit(var_dump($oXML->channel));
 foreach($oXML->channel->item as $oEntry){
    echo $oEntry->title . "<br>" .$oEntry->link . "<br>" .$oEntry->description . "<br>" .$oEntry->pubDate . "<br>" .$oEntry->guid . "<br><br><hr>";
}

exit('here ');
$servername = "localhost" ;
$username = "root";
$password="ceim5193";
$conn = new mysqli($servername, $username, $password,'michmosh');
$sql = " show create table draws ";
$res = $conn->query($sql);
$row = $res->fetch_array(MYSQLI_NUM);
exit(var_dump($row));