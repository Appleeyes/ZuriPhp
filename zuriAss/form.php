<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>

<body>
    <form method="POST" action="userdata.php">
        <label for="name">
            Full Name: <input type="text" name="name">
        </label><br>
        <label for="email">
            Email: <input type="email" name="email">
        </label><br>
        <label for="dob">
            Date Of Birth: <input type="date" name="dob">
        </label><br>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select><br>
        <label for="country">
            Country: <input type="text" name="country">
        </label><br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>