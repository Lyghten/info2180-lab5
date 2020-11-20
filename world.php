<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


if ( isset ($_GET['country'] )|| empty($_GET['country'])){
$stmt= $conn->query("SELECT * FROM countries WHERE name LIKE '%country'");
$countries = $stmt ->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
echo "<tr><td>Name</td> 
      <td>Continent </td>
      <td>Independence</td>
      <td>head of State</td>
      </tr> \n ";
  
  
foreach($results as $row){
  echo "<tr><td>{$row['name']}</td>
    <td>{$row['continent']}</td>
    <td>{$row['year_of_independence']}</td>
    <td>{$row['head_of_state']}</td>
    </tr> \n ";

}
echo "</table>";


}


if (isset($_GET['country'])) {
$stmt= $conn->query("SELECT * FROM countries WHERE name LIKE '%country' AND context=cities");
$countries = $stmt ->fetchAll(PDO::FETCH_ASSOC);


echo "<table>";
echo "<tr><td>District</td> 
      <td>Population</td>
      </tr> \n ";

foreach($results as $row){
  echo "<tr><td>{$row['name']}</td>
  <td>{$row['district']}</td>
  <td>{$row['population']}</td>
  </tr> \n ";

}


?>
<ul>
  <?php foreach ($results as $row) : ?>
    <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
  <?php endforeach; ?>
  </ul>