<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Accommodation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">PG Finder</a>
  </div>
</nav>

<div class="container">
    <div class="row">
        <!-- Sidebar Filter Form -->
        <div class="col-md-3 mb-4">
            <div class="card p-3 shadow-sm">
                <h5>Filter Options</h5>
                <form method="GET" action="index.php">
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <select name="city" class="form-select">
                            <option value="">All Cities</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Noida">Noida</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select">
                            <option value="">All</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unisex">Unisex</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Max Budget (₹)</label>
                        <input type="number" name="budget" class="form-control" placeholder="e.g. 10000">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                </form>
            </div>
        </div>

        <!-- Property Listing Cards -->
        <div class="col-md-9">
            <h4 class="mb-3">Available Accommodations</h4>
            <div class="row">
                <?php
                $where = [];
                if (!empty($_GET['city'])) {
                    $city = mysqli_real_escape_string($conn, $_GET['city']);
                    $where[] = "city = '$city'";
                }
                if (!empty($_GET['gender'])) {
                    $gender = mysqli_real_escape_string($conn, $_GET['gender']);
                    $where[] = "gender = '$gender'";
                }
                if (!empty($_GET['budget'])) {
                    $budget = (float)$_GET['budget'];
                    $where[] = "price <= $budget";
                }

                $sql = "SELECT * FROM properties";
                if (count($where) > 0) {
                    $sql .= " WHERE " . implode(' AND ', $where);
                }

                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                            <p class="card-text text-muted mb-1">📍 <?php echo htmlspecialchars($row['city']); ?></p>
                            <p class="card-text mb-1"><strong>Gender:</strong> <?php echo htmlspecialchars($row['gender']); ?></p>
                            <p class="card-text mb-2"><strong>Rating:</strong> ⭐ <?php echo htmlspecialchars($row['rating']); ?></p>
                            <h6 class="text-success">₹<?php echo htmlspecialchars($row['price']); ?> / month</h6>
                            <a href="details.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm mt-2">View Details</a>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                } else {
                    echo "<p class='text-muted'>No properties found matching your criteria.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>