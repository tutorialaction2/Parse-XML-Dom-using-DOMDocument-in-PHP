<?php
 $dom = new DOMDocument();
 $dom->load('../student_records.xml');
$records = array();
$a = array();
 $nodes = $dom->getElementsByTagName("record"); 
 foreach( $nodes as $node ){
 	$subNodes = $node->childNodes;
 	$a = array();
          foreach ($subNodes as $subNode){
            	if($subNode->nodeName=="id"||$subNode->nodeName=="name")// Used to remove empty nodes
                $a[$subNode->nodeName] =  $subNode->nodeValue;
            }
            $records[] = $a;
    
 }
 echo json_encode($records);

 ?>