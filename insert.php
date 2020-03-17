<?php


$response = array();
 
if (isset($_POST['name']) && isset($_POST['age'])) 
{
 
    $name = $_POST['name'];
    $age = $_POST['age'];
 

    $con=mysqli_connect('localhost','root','','tuition');

    //$result = "INSERT INTO trfbat(name,age) VALUES('$name','$age')";
    $result = "INSERT INTO trfbat(name,age) VALUES('$name','$age')";
    
    $run=mysqli_query($con,$result);
    


    if ($result) 
    {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "Battery data inserted succesfully successfully created.";
 
        // Show JSON response
        echo json_encode($response);
    }
     else 
     {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";
 
        // Show JSON response
        echo json_encode($response);
    }

} 
else
{
    
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    
    echo json_encode($response);
}
?>