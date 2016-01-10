<?php
$id = $_GET['id'];
 $dom = new DOMDocument();

 $dom->load('../student_records.xml');

 $nodes = $dom->getElementsByTagName("record"); 
 foreach( $nodes as $node ){
 	$subNodes = $node->childNodes;
           foreach ($subNodes as $subNode)
            	if($subNode->nodeName=="id"&&$subNode->nodeValue==$id)
            		$node->parentNode->removeChild($node);
     
 }
 
  $dom->save("../student_records.xml");

?>