<?php
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Encrypting password

    // Check if email already exists
    $checkEmail = "SELECT * FROM users1 WHERE email='$email'"; // Updated table name to users1
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "<script>
                alert('Email Address Already Exists!');
                window.location.href = 'register.php';
              </script>";
    } else {
        // Insert new user into the database
        $insertQuery = "INSERT INTO users1 (firstName, lastName, email, password) 
                        VALUES ('$firstName', '$lastName', '$email', '$password')"; // Updated table name to users1

        if ($conn->query($insertQuery) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Encrypting password

    // Verify user credentials
    $sql = "SELECT * FROM users1 WHERE email='$email' AND password='$password'"; // Updated table name to users1
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: old2.html");
        exit();
    } else {
        echo "<script>
                alert('Invalid Email or Password!');
                window.onload = function() {
                    document.getElementById('signIn').style.display = 'block';
                    document.getElementById('signup').style.display = 'none';
                };
              </script>";
    }
}
?>
