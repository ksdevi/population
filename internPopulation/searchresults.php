<?php
require ('config.php');
$return = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "SELECT * FROM population
	WHERE city  LIKE '".$search."%'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	
	while($row1 = mysqli_fetch_array($result))
	{
		$return .="<div class='list-group-item' id='".$row1['rank']."' onClick=getCity('".$row1['rank']."')>".$row1['city']."</div>";
		//$return .="<button class='list-group-item' id='".$row1['rank']."'>".$row1['city']."</button>";
		
	}
   
	echo $return;
	}
}
else
{
	//echo 'No results containing all your search terms were found.';
}
?>