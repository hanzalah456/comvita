<!-- <?php 

error_reporting(E_ALL);

if (isset($_GET['function'])) {
    $_GET['function']($conn);
} elseif (isset($_POST['function'])) {
    $_POST['function']($conn);
}

function submitForm($conn) {
    $first_name = $_POST['name'];
    $last_name = $_POST['description'];
    $email = $_POST['interval'];
    $phone = $_POST['count'] ?? 0;
    $password = $_POST['compute'];
    $override = $_POST['override'] ?? 0;
    $confidential = $_POST['confidential'] ?? 0;
    $lookback = $_POST['lookback'];
    $deferralType = $_POST['deferralType'];
    $sql = "INSERT INTO user (`name`, `description`, `interval`, `count`, `compute`, `override`, `confidential`, `lookback`, `deferralType`)
    VALUES ('$name', '$description', '$interval', '$count', '$compute', '$override', '$confidential', '$lookback', '$deferralType')";
    if ($conn->query($sql) === TRUE) {
        // $_SESSION['success']
        echo "Record Inserted Successfully";
        // header("location:table.php");
    } else {
    echo "Error inserting record: " . mysqli_error($conn);
    }
  mysqli_close($conn);
}





?> -->