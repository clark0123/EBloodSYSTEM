<?php
include('../header.php');

// Function to log activities
function logActivity($action, $details) {
    // Customize this function to save logs to a file, database, etc.
    $logEntry = date('Y-m-d H:i:s') . ' - ' . $action . ' - ' . $details . PHP_EOL;
    file_put_contents('activity_log.txt', $logEntry, FILE_APPEND);
}

// Log the page visit
logActivity('Page Visit', 'User: ' . $_SESSION['username']);

// ... (your existing code)

$members = $connection->query("SELECT * FROM member");
while ($row = $members->fetch_array()) {
    // Log activity for each member row
    logActivity('View Member', 'Member ID: ' . $row['member_id'] . ', Name: ' . $row['name']);

    // ... (your existing code)
}
?>

<!-- The rest of your HTML and JavaScript code -->

<?php
include('../footer.php');
?>
