<?php
    $servername = "localhost";
    $database = "u364642895_users";
    $username = "u364642895_amado";
    $password = "Gamefreak2001";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully" . "<br>";

    $sql = "INSERT INTO users (username, password)
    VALUES ('John', 'Gamers')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      $getUser = $_SESSION['user'];
      echo $getUser;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>