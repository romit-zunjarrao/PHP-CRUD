<?php

    require_once ("db-setting.php");
    require_once("functions.php");
    $record = fetchAllUsers();
?>


<html>
    <head>

    </head>
    <body>
        <table>
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Phone</th>
                <th>Birth Date</th>
                <th>Gender</th>
                <th>Date Entered</th>
                <th>Lunch cost</th>
                <th>Student id</th>
            </thead>
            <?php

            foreach ($record as $displayRecords)
            {
            ?>
                <tr>
                    <td><?php print $displayRecords['firstname']; ?></td>
                    <td><?php print $displayRecords['lastname']; ?></td>
                    <td><?php print $displayRecords['email']; ?></td>
                    <td><?php print $displayRecords['street']; ?></td>
                    <td><?php print $displayRecords['city']; ?></td>
                    <td><?php print $displayRecords['state']; ?></td>
                    <td><?php print $displayRecords['zip']; ?></td>
                    <td><?php print $displayRecords['phone']; ?></td>
                    <td><?php print $displayRecords['birthdate']; ?></td>
                    <td><?php print $displayRecords['gender']; ?></td>
                    <td><?php print $displayRecords['dateEntered']; ?></td>
                    <td><?php print $displayRecords['lunchCost']; ?></td>
                    <td><?php print $displayRecords['studentId']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>