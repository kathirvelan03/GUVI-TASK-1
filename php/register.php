<?php
$servername = "localhost";
$username ="root";
$password="";
$dbname="guvi";
$connect=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno())
{
    echo "falied to connect";
}
echo "server connected";
// if(isset($_POST['name']) && $_POST['name']!='' && isset($_POST['email']) && $_POST['email']!='' && isset($_POST['password']) && $_POST['password']!='' && isset($_POST['mobile']) && $_POST['moblie']!='')
//{
    $sql = "INSERT INTO users(firstName,lastName,email,password,age,mobile) VALUES('".addslashes($_POST['firstName'])."' ,'".addslashes($_POST['lastName'])."', '".addslashes($_POST['email'])."' , '".addslashes($_POST['password'])."' , '".addslashes($_POST['age'])."','".addslashes($_POST['mobile'])."' )";
    $connect->query($sql);
//}
$uri = 'mongodb+srv://kathirvelans20mts:1234@cluster0.lnle7d2.mongodb.net/?retryWrites=true&w=majority';
$manager = new MongoDB\Driver\Manager($uri);
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$database = "guviproject";
$collection = "users";
$bulk = new MongoDB\Driver\BulkWrite;
$document = [
    'email' => $email,
    'age' => $age,
    'contact'=>$mobile,
    'firstName'=>$firstName,
    'lastName'=>$lastName,
];
$bulk = new MongoDB\Driver\BulkWrite;
// Add insert operation to bulk write object
$_id = $bulk->insert($document);
// Create MongoDB write concern object
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 10000);
// Execute bulk write operation
$result = $manager->executeBulkWrite("$database.$collection", $bulk, $writeConcern);
// Print result
printf("Inserted %d document(s)\n", $result->getInsertedCount());
$mongoId = (string)$_id;
printf($mongoId);

?>