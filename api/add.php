<?php
 $name = $_GET['name'];
 $id = $_GET['id'];
 $dom = new DOMDocument();
 $dom->load('../student_records.xml');
 $record = $dom->createElement("record"); 
 $dom->documentElement->appendChild($record);
 $record->setAttribute("id", $id); 
 $uid = $dom->createElement("id", $id); 
 $record->appendChild($uid); 
 $name = $dom->createElement("name", $name); 
 $record->appendChild($name);
 $dom->save("../student_records.xml");


?>