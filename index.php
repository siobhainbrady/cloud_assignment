<?php


include("connection.php");

$add_error=""; //variable to store error message;
$delete_response="";


if(isset($_POST['add_submit']))
{
	if(empty($_POST['cat1']) || empty($_POST['name']) || empty($_POST['price']) )
	{
		$add_error = "All fields are required";
	}
else
{
	
	$item_category = mysqli_real_escape_string($conn, $_POST['cat1']);
	$item_name = mysqli_real_escape_string($conn, $_POST['name']);
	$item_price = mysqli_real_escape_string($conn, $_POST['price']);
	
	$data_insert = "INSERT INTO $_POST[cat1] (category,name,price) VALUES ('$_POST[cat1]','$_POST[name]','$_POST[price]')";
	
	mysqli_query($conn, $data_insert);
        echo "<script language='javascript'>
          alert('Your entry has been added succesfully');
          </script>";
}

}


if(isset($_POST['delete_submit']))
{
	if(empty($_POST['cat1']) || empty($_POST['name']) )
	{
		$add_error = "All fields are required";
	}
else
{
	
	$item_category = mysqli_real_escape_string($conn, $_POST['cat1']);
	$item_name = mysqli_real_escape_string($conn, $_POST['name']);
	
	
	$data_delete = "DELETE FROM $_POST[cat1] WHERE name= '$_POST[name]'";
	
	mysqli_query($conn, $data_delete);
        echo "<script language='javascript'>
          alert('Your entry has been deleted succesfully');
          </script>";
}

}


?>


<html>
<body>
<h1>Welcome to the Cloud Shop</h1>

<h2>To insert data to a table please select information below:</h2>

<br><br>
<form action="" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sport">Sport</option>
</select>
</label>
<br><br>
Name: <input type ="varchar" name="name" /><br><br>
Price: <input type ="varchar" name="price" /><br><br>

<input type="submit" value="Insert!" name="add_submit"/>
</form>

<h2>To delete table please select information below:</h2>

<br>
<form action="" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sport">Sport</option>
</select>
</label>
<br><br>
Name: <input type ="varchar" name="name" /><br><br>

<input type="submit"  value="Delete!" name="delete_submit"/>

</form>
<br>

<h2>Select a table to view it's data:</h2>
<form action="select.php" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sport">Sport</option>
</select>
</label>
<br><br>

<input type="submit" value="View Data!"/>

</form>

<h2>Select a table & enter price range:</h2>
<form action="range.php" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sport">Sport</option>
</select>
</label>
<br><br>
Price from: <input type ="varchar" name="pricefrom" /><br><br>
Price to: <input type ="varchar" name="priceto" /><br><br>
<br>
<input type="submit" value="View Data!"/>

</form>

</body>
</html>
