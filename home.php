
<!DOCTYPE html>
<html>
<head>
	<title>Local Storage example</title>
    <link href="main.css" rel="stylesheet" />
</head>
<body>
<div class="container">
<form>
<input type="text" placeholder="Name" id="name" />
<input type="submit" value="Add" />
</form>
<table border=1 cellpadding="1">
</table>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
$(function(){
  var index=0;
  var table = $('table');
$.get("api/get.php",{},function(res){
if(res.length!=0){
  $(res).each(function(x,y){
    index=y.id;
    table.append("<tr><td>"+y.id+"</td><td>"+y.name+"</td><td data-id='"+y.id+"' class='del'>Delete</td></tr>");
  });
  table.show();
}
},"JSON");
$('table').on("click",".del",function(){
  id = $(this).attr("data-id");
  var ref = $(this);
 $.get("api/remove.php",{id:id},function(res){
  alert("Successfully Deleted");
  ref.parent().remove();
 });

});


 $('form').submit(function(){
  var name = $.trim($('#name').val());
  if(name.length!=0){
    ++index;
  $.get("api/add.php",{name:name,id:index},function(res){
    alert("Successfully Added");
     table.append("<tr><td>"+index+"</td><td>"+name+"</td><td data-id='"+index+"' class='del'>Delete</td></tr>").show();
  });
}
  return false;
 })
});
</script>
</body>
</html>