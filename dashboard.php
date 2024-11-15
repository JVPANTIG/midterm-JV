<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit;
}

$email = $_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_destroy();
    setcookie(session_name(), '', time() - 3600);
    header('Location: index.php');
    exit;
}
?>

<?php include_once 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .card-container {
            display: flex;
            gap: 20px;
        }

        .card {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="header-container">
            <h2>Welcome to the System: <?php echo htmlspecialchars($email); ?></h2>
            <form method="post" class="logout-btn">
                <button type="submit" name="logout" class="btn btn-danger">Logout</button>
            </form>
        </div>

        <div class="card-container">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h4 class="card-title mb-3">Add a Subject</h4>
                    <p>This section allows you to add a new subject in the system. Click the button below to proceed with the adding process.</p>
                    <a href="subject/add.php" class="btn btn-primary w-100">Add Subject</a>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h4 class="card-title mb-3">Register a Student</h4>
                    <p>This section allows you to register a new student in the system. Click the button below to proceed with the registration process.</p>
                    <a href="student/register.php" class="btn btn-primary w-100">Register</a>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.min.js"></script>
</body>
</html>
