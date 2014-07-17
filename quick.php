<html>
<head>
<title>Quick Whois</title>
<link rel=stylesheet type=text/css href=stylesheet.css>
</head>
<body>
<?php
function readDomain($domain,$server)
{
    $con = fsockopen($server, 43);
    if (!$con) return false;
    fputs($con, $domain."\r\n");
    $response = ' :';
    while(!feof($con)) {
        $response .= fgets($con,128); 
    }

    fclose($con);
return $response;
}
$domain = $_GET['d'];
$server = $_GET['s'];
$whois_output = readDomain($domain,$server);
?>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="450">
    <tr><font size="4">Whois Output: <td>
<?php
echo $domain."</font><pre>".$whois_output;
?>
</pre></td></tr>
  </table>
  </center>
</div>

</body>
</html>
