
<?php
include 'db.php';

$result = null;
$error = null;

if(isset($_GET['search'])) {
    try {
        $search = $_GET['search'];
        // Using prepared statement to prevent SQL injection
        $sql = "SELECT * FROM appointments WHERE 
                CONCAT(full_name, ' ', email, ' ', phone, ' ', service_type, ' ', status) 
                LIKE :search";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['search' => "%$search%"]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        $error = "An error occurred while searching.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Appointments</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container1">
        <h2>Search Appointments</h2>
        <form action="" method="get" class="search-form">
            <input type="text" 
                   name="search" 
                   required 
                   value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>" 
                   placeholder="Search by name, email, phone, service type or status">
            <button type="submit">Search</button>
            <a href="list.php" class="btn-back">View All</a>
        </form>

        <?php if($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php elseif(isset($result)): ?>
            <?php if(empty($result)): ?>
                <p class="no-results">No appointments found matching your search.</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($result as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item["id"]); ?></td>
                        <td><?php echo htmlspecialchars($item["full_name"]); ?></td>
                        <td><?php echo htmlspecialchars($item["email"]); ?></td>
                        <td><?php echo htmlspecialchars($item["phone"]); ?></td>
                        <td><?php echo htmlspecialchars($item["service_type"]); ?></td>
                        <td class="status-<?php echo strtolower($item["status"]); ?>">
                            <?php echo htmlspecialchars($item["status"]); ?>
                        </td>
                        <td class="actions">
                            <a href="detail.php?id=<?php echo $item["id"]; ?>" class="btn-view">View</a>
                            <a href="update.php?id=<?php echo $item["id"]; ?>" class="btn-edit">Edit</a>
                            <a href="delete.php?id=<?php echo $item["id"]; ?>" class="btn-delete" 
                               onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>


    </body>
</html>
