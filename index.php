<?php
 $dom = new DOMDocument();
 $dom->load('student_records.xml');

 $nodes = $dom->getElementsByTagName("record"); 
echo "<table border=1 width=200>";
 foreach( $nodes as $node ){
 	$subNodes = $node->childNodes;
        echo "<tr>";
            foreach ($subNodes as $subNode)
            	if($subNode->nodeName=="id"||$subNode->nodeName=="name")// Used to cremove empty nodes
                echo  "<td>". $subNode->nodeValue."</td>";
       echo "</tr>";
 }
 echo "</table>";

?>