 <?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"inventory");
$sql="SELECT * FROM goods_items WHERE item_code_name = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    echo "<option>" . $row['item_description'] . "</option>";
?>
</body> 