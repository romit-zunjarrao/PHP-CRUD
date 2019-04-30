<?php
/**
 * Created by PhpStorm.
 * User: romit
 * Date: 29-04-2019
 * Time: 09:11 PM
 */
error_reporting(E_ERROR | E_PARSE);
function fetchAllUsers()
{
    global $mysqli;
    $row[]="";
    $stmt = $mysqli->prepare(
        "SELECT * FROM user_info"
    );
    $stmt->execute();
    $stmt->bind_result(
        $firstname,$lastname,$email,$street,$city,$state,$zip,$phone,$birthday,$gender,$dateEntered,$lunchCost,$studentId
    );


    while($stmt->fetch())
    {
        $row[] = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'street' => $street,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'phone' => $phone,
            'birthdate' => $birthday,
            'gender' => $gender,
            'dateEntered' => $dateEntered,
            'lunchCost' => $lunchCost,
            'studentId' => $studentId
        );
    }
    $stmt->close();
    return ($row);

}


function insertNewUser($firstname,$lastname,$email,$street,$city,$state,$zip,$phone,$birthDate,$lunchCost,$studentId)
{
    global  $mysqli;
    $stmt = $mysqli->prepare(
        "INSERT INTO user_info(
        first_name,
        last_name,
        email,
        street,
        city,
        state,
        zip,
        phone,
        birthdate,
        gender,
        lunch_cost,
        student_id
)
VALUES (
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?
)"
    );
    $stmt->bind_param("sssssssssssi",$firstname,$lastname,$email,$street,$city,$state,$zip,$phone,$birthDate,$lunchCost,$studentId);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}