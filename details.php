<?php 
include('db_connect.php'); 
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$sql = "SELECT * FROM properties WHERE id = $id";
$result = mysqli_query($conn, $sql);
$property = mysqli_fetch_assoc($result);

if (!$property) {
    echo "Property not found!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($property['name']); ?> - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">← Back to Listings</a>
  </div>
</nav>

<div class="container">
    <div class="card shadow p-4">
        <h2><?php echo htmlspecialchars($property['name']); ?></h2>
        <p class="text-muted">Location: 📍 <?php echo htmlspecialchars($property['city']); ?></p>
        <hr>
        <h5>Details:</h5>
        <ul>
            <li><strong>Gender Suitable:</strong> <?php echo htmlspecialchars($property['gender']); ?></li>
            <li><strong>Rating:</strong> ⭐ <?php echo htmlspecialchars($property['rating']); ?> / 5</li>
            <li><strong>Price:</strong> ₹<?php echo htmlspecialchars($property['price']); ?> per month</li>
        </ul>
        <button id="interestedBtn" class="btn btn-success mt-3" onclick="markInterested(<?php echo $property['id']; ?>)">
            ❤️ Mark as Interested
        </button>
        <div id="msg" class="mt-2 text-success fw-bold"></div>
    </div>
</div>

<script>
function markInterested(propertyId) {
    document.getElementById('msg').innerText = "Marked as Interested successfully! (AJAX Demo)";
    document.getElementById('interestedBtn').classList.replace('btn-success', 'btn-secondary');
    document.getElementById('interestedBtn').innerText = "Interested ❤️";
}
</script>

</body>
</html>