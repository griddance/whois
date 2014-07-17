<?php

function checkDomain($domain, $server) {
  // Open a socket connection to the whois server
  $con = fsockopen($server, 43);
  if (!$con)
    return false;

  // Send the requested doman name
  fputs($con, $domain . "\r\n");

  // Read and store the server response
  $response = ' :';
  while (!feof($con)) {
    $response .= fgets($con, 128);
  }

  // Close the connection
  fclose($con);

  // Check the response stream whether the domain is available
  // echo $response;
  if (strpos($response, "No entries found")) {

    return true;
  } else {
    return false;
  }
}


if (checkDomain("dmitrio.ru", "whois.ripn.net")) print "Свободен нахуй"; else print "Занят блять";
echo 'Test';

?>
