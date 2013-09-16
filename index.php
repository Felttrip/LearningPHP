<!DOCTYPE html>
<html>
<body>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = $_POST["gender"];
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
   <label>Name:</label> <input type="text" name="name">
   <br><br>
   <label>E-mail:</label> <input type="text" name="email">
   <br><br>
   <label>Website:</label> <input type="text" name="website">
   <br><br>
   <label>Comment:</label> <input type="text" name="comment">
   <br><br>
   <label>Gender:</label>
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>

