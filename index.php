<!DOCTYPE html>
    <html lang = "en">
<head> 
    <title>Contact book</title> 
</head>
    <body>This is a phone contact recording Website
        <fieldset>
        <legend>Add Contact information to store here:</legend>
            <form action = "insert.php" method = "post">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br>
            <label for="number">Phone number:</label>
            <input type="number" id="pnumber" name="pnumber"><br>
            <input type="submit" value="Submit">
            </form>
        </fieldset>
    </body>
</html>