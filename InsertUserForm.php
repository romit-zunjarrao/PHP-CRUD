<?php
/**
 * Created by PhpStorm.
 * User: romit
 * Date: 29-04-2019
 * Time: 11:32 PM
 */
require_once ("db-setting.php");
require_once("functions.php");


?>

<html>
    <head>

    </head>
    <body>
    <form action=InsertNewUser.php method="post">
    <table>
        <tr>
            <td><label>First Name</label></td>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td><label>Last Name</label></td>
            <td><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <td><label>email</label></td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td><label>Street</label></td>
            <td><input type="text" name="street"></td>
        </tr>
        <tr>
            <td><label>City</label></td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td><label>State</label></td>
            <td><input type="text" name="state"></td>
        </tr>
        <tr>
            <td><label>Zip</label></td>
            <td><input type="text" name="zip"></td>
        </tr>
        <tr>
            <td><label>Phone</label></td>
            <td><input type="number" name="phone"></td>
        </tr><tr>
            <td><label>Birth Date</label></td>
            <td><input type="date" name="birthDate"></td>
        </tr>
        <tr>
            <td><label>Gender</label></td>
            <td><input type="text" name="gender"></td>
        </tr>
        <tr>
            <td><label>Lunch Cost</label></td>
            <td><input type="text" name="lunchCost"></td>
        </tr>
        <tr>
            <td><label>Student ID</label></td>
            <td><input type="text" name="studentId"></td>
        </tr>

    </table>
    <input type="submit" value="Add">
    </form>
    </body>
</html>
