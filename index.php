<?php


$mc = new Memcached();
$mc->addServer("127.0.0.1", 11211);
 
$result = $mc->get("any_key");
 
if($result) {
  echo $result;
} else {
  echo "No Data";
  $mc->set("any_key", "Data From Memcached", 1200) or die ("Error");
}
 
 
 ?>
