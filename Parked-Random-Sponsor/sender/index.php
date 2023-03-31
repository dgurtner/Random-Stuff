<?php

// allow cross-origin requests from example.com and example.org
header("Access-Control-Allow-Origin: https://420verse.shop, https://spite24.shop");
// allow the HTTP methods GET, POST, PUT, DELETE, and OPTIONS
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
// allow the Content-Type header
header("Access-Control-Allow-Headers: Content-Type");

$allthelinks = array('DoTerra' => 'doterra','DreamHost' => 'dreamhost','Elegant Themes' => 'elegantthemes','Harvest' => 'harvest','Hopps' => 'hopps','Printful' => 'printful','Printify' => 'printify','Shopify' => 'shopify','Melaleuca' => 'melaleuca');
$countthelinks = count($allthelinks);
$findtherand = rand(1,$countthelinks);

$thecount = 0;
foreach ($allthelinks as $thename => $thelink) {
  if ($thecount === $findtherand) {

    $data = [
      'name' => $thename,
      'link' => $thelink
    ];

    $json = json_encode($data);

    $file = 'data.json';
    file_put_contents($file, $json);

    // print '<a href="https://gurt.co/go/' . $thelink . '">' . $thename . '</a><br>';
  }
  $thecount++;
}

?>

