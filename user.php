<html>
	<head>
		<title> test page </title>
	<body background="SmallThriftyFugu-size_restricted.gif">
	<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {width: 150px;}

</style>
<script>
		function test()
		{
			var name = Number(document.getElementById("name").value);
			var cn = Number(document.getElementById("cn").value);

			if (name !=""){
alert("Our Operator will Contact To You Soon");
return true;
}
	else if (cn !="") {
alert("Our Operator will Contact To You Soon");
return true;
}
		}
	</script>
<br><br>
	<form action="adduser.php" method="POST" align="center"/>
		NAME : <input type="text" name="name" required style=" height: 40px; width:280px;   ">
		<br><br>
			
		EMAIL : <input type="text" name="em" required style=" height: 40px; width:280px;  ">
		<br><br>
			
		PHONE : <input type="text" name="cn" required style=" height: 40px; width:280px;  ">
		<br><br>
			
		<button class="button button1" type="submit" value ="SUBMIT" >SUBMIT</button></script>	
	</form>
</body>
</html>