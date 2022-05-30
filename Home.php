<html>
    <head>
        <title> Registration Form </title>
</head>
<body>
    <h1>Registration Form</h1>
    <hr>
<form action="../control/process.php"method="POST">
<table>
<tr><td>First Name: </td><td><input type = "text" name="fname"></td></tr>
<tr><td>Last Name: </td> <td><input type = "text"> </td> </tr> 
<tr> <td> Age: </td> <td> <input type = "text"> </td> </tr
    <tr><td>Designation:</td>
    <td><input type="radio" name="designation" >Junior Programmer
    <input type="radio" name="designation"> Senior Programmer
    <input type="radio" name="designation"> Project Lead </td></tr>
    <tr><td>Preffered Language</td>
    <td><input type="checkbox" name="language">Java
    <input type="checkbox" name="language">PHP
    <input type="checkbox" name="language">C++</td></tr>
<tr><td>E-mail: </td><td><input type="text"></td></tr>
<tr><td>Password:</td><td><input type="text"></td></tr>
<tr><td>Please Choose a file</td> <td> <input type="File"> </td></tr>
<tr><td> <input type="submit" name="Submit"> <input type="reset" name="Reset"></td></tr>


</form>
</body>
</html>