<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .logo {
            font-weight: bold;
            color: #333;
        }
        .nav-links {
            display: flex;
            gap: 1rem;
        }
        .nav-link {
            color: #333;
        }
        .nav-link:hover {
            color: #0066cc;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1 class="logo">Logo</h1>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="#">Home</a></li>
                <li><a class="nav-link" href="#">About</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="navbarDropdown" role="dropdown" aria-expanded="false">
                <?php echo htmlspecialchars($_SESSION['email']); ?> <i class="bi bi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
        </div>
        <form id="logout-form" action="" method="POST" style="display: none;">
            <input type="hidden" name="logout" value="true">
        </form>
    </div>
