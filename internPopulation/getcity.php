<?php
require ('config.php');
$return = '';
if(isset($_POST["rank"]))
{
	$rank = mysqli_real_escape_string($conn, $_POST["rank"]);
	$query = "SELECT * FROM population
	WHERE rank = $rank";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$return .="<br><br><table class='table table-bordered form-control'>
  <tr>
    <th>Rank</th>
    <th>City</th>
    <th>Population 2011</th>
    <th>population 2001</th>
    <th>State</th>
  </tr>";
	
	while($row1 = mysqli_fetch_array($result))
	{
		$return .="<tr>
        <td>".$row1['rank']."</td>
        <td>".$row1['city']."</td>
        <td>".$row1['population_2011']."</td>
        <td>".$row1['population_2001']."</td>
        <td>".$row1['state']."</td>
        </tr>";
	}
   $return .="</table>";
	echo $return;
	}
}
else
{
	//echo 'No results containing all your search terms were found.';
}
?>