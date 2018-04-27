<!DOCTYPE html>
<html>
<head>
	<title>Form Input - User</title>
</head>
<body>
	<form action="http://localhost/travel/index.php/user/add" method="POST">
	Username<br/>
	<input type="text" name="username"><br/>
	Password<br/>
	<input type="password" name="password"><br/>
	Fullname<br/> 
	<input type="text" name="fullname"><br/>
	Level<br/>
	<select name="level">
	 	<option value="admin">Admin</option>
	 	<option value="user">User</option>
	</select><br/>
	<input type="submit" value="simpan">
	</form>
</body>
</html>