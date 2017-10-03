<?php

//date_default_timezone_set('America/Sao_Paulo');

$servername = "articulando.chljb4pym510.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "mg17138275";
$dbname = "articulei";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// process.php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['nome']))
        $errors['nome'] = 'Preencha o nome.';

    if (empty($_POST['email']))
        $errors['email'] = 'Email é necessário.';

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
        //$nome = utf8_decode($_POST['nome']);
        $email = $_POST['email'];
        $ip = $_SERVER['REMOTE_ADDR'];
       // $dataLocal = date('d/m/Y H:i:s', time());

        // show a message of success and provide a true success variable
        $sql = "INSERT INTO leads (nome, email, ip_inscricao, data_inscricao) VALUES ('$nome', '$email', '$ip',now())";
        // $data['success'] = true;
        // $data['message'] = 'Success!';
        if ($conn->query($sql) === TRUE) {
                $data['success'] = true;
                $data['message'] = $data;
        } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
            $data['success'] = false;
            $data['message'] = 'Problema na inserção no banco de dados!';
        }
    }

    // return all our data to an AJAX call
    echo json_encode($data);