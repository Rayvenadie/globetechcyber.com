<?php
session_start();
?>

<?php
// Database connection details
$servername = "127.0.0.1";
$username = "globetechdb";
$password = "globeTech";
$dbname = "globetech";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables to store form input
$id = $amount = $platform = $status = "";

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the input data
    $id = sanitize_input($_POST["id"]);
    $amount = sanitize_input($_POST["amount"]);
    $platform = sanitize_input($_POST["platform"]);
    $status = sanitize_input($_POST["status"]);

    // SQL query to update the database table
    $sql = "UPDATE cases SET amount='$amount', platform='$platform', status='$status' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Case updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Latest compiled Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Latest compiled W3CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Globe Tech Cyber</title>
</head>

<body>
  <style>
    .mycard {
    box-shadow: 5px 5px 5px rgb(202, 202, 202);
    border: 2px solid rgb(211, 211, 211);
    border-radius: 35px;
    color: rgb(71, 71, 71);
  }
   .monthead {
    font-family: montserrat;
    font-weight: bold;
   }
   .topmar {
    margin-top: 50px; 
   }
   .botmar {
    margin-bottom: 30px;
   }
  </style>
  <div id="header" class="container-fluid bg-dark p-3">
        <div class="d-flex justify-content-center">
                <img src="assets/images/globetechlogo.png" alt="globetech logo">
        </div>
  </div>

  <div class="container pt-5 d-flex justify-content-center">
      <div class="row p-5 card mycard">

    <h5 class="text-center monthead">Update Case Information</h2>
    <div class="form-group">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
    <tr>    
    <td> <label for="id">Case ID:</label></td>
     <td>   <input type="text" name="id" class="form-control" required><br> </td>
     </tr>
     <tr class="success">
        <td> <label for="amount">Amount:</label></td>
        <td class="success"> <input type="text" class="form-control" name="amount" required><br></td>
     </tr>
        <td> <label for="platform">Platform:</label> </td>
        <td> <input type="text" class="form-control" name="platform" required><br></td>
      <tr>
        <td> <label for="status">Status:</label> </td>
        <td> <select class="form-control caret" name="status" required>
        <option value="In Progress">In Progress</option>
        <option value="Tracked">Tracked</option>
        <option value="Recovered">Recovered</option> <br></td>
      </tr>
      <tr>
        <td></td>
        <td> <input type="submit" class="form-control bg-primary" style="color:white;" value="Submit"> </td>
        </tr>
        </table>
    </form>
    </div>
    </div>
    </div>

    <div class="container-fluid bg-light p-5 topmar">
        <div class="d-flex justify-content-center">
        <h3 class="text-center monthead topmar botmar">View All Cases</h2>
        </div>
        <div class="d-flex justify-content-center p-2">
        <?php
// Database connection details

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve all data from the "cases" table
$sql = "SELECT id, amount, platform, status FROM cases";
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    // Output data in a table format
    echo "<table border='1' class='table table-striped'>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Platform</th>
                <th>Status</th>
            </tr>";

    // Loop through each row and display the data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["amount"] . "</td>
                <td>" . $row["platform"] . "</td>
                <td>" . $row["status"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No data found in the table.";
}

// Close the database connection
$conn->close();
?>
</div>
<div class="d-flex justify-content-center">
<a href="create-cases.php"> <button class="w3-btn bg-primary w3-round-xxlarge w3-padding-large" style="color:white;">Create A New Case</button></a>
    </div>
    </div>
    <div id="footer" class="container-fluid bg-dark p-3">
        <div class="d-flex justify-content-center">
        <p style="color:white;" class="pt-2"> ©Globe Tech Cyber 2023 </p>
        </div>
  </div>
</body>
</html>