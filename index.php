
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation & Availability Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <a style="color:white;" class="navbar-brand" href="index.php">BloodHub</a>
        </div>
        <div class="actions">
            <a href="login.php" class="btn btn-outline-light">Login</a>
            <a href="signup.php" class="btn btn-outline-light">Sign Up</a>
        </div>
    </header>

    <div class="hero-section">
        <h1>Find Life. Give Life.</h1>
        <p>Join our community to save lives and find blood donors quickly!</p>
        
    </div>

    

    <div class="container options-section">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Find Donors</h3>
                    <p>Locate nearby blood donors with a simple search.</p>
                    <a href="login.php" class="btn btn-outline-light">Find Donors</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Donate Blood</h3>
                    <p>Register as a donor and save lives by giving blood.</p>
                    <a href="signup.php" class="btn btn-outline-light">Donate Blood</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Why Donate?</h3>
                    <p>Learn the importance of blood donation and its impact.</p>
                    <a href="https://www.redcrossblood.org/local-homepage/news/article/blood-donation-importance.html" target="_blank" class="btn btn-outline-light">Why?</a>
                </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>Our Community</h3>
                    <p>Meet with the community of donors with a awesome heart.</p>
                    <a href="" class="btn btn-outline-light">Facebook Group</a>
                </div>
            </div>
        </div>
    </div>

    <div class="containerr mt-5">
        <h1 class="text-center mb-4">Community Blood Donation Statistics</h1>

        <div class="row">
            <!-- Total Donors -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total Donors</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $total_donors; ?> Donors</h5>
                        <p class="card-text">Total number of registered blood donors in our community.</p>
                    </div>
                </div>
            </div>

            <!-- People Served -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">People Served</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $people_served; ?> People</h5>
                        <p class="card-text">Total number of people served blood through our community.</p>
                    </div>
                </div>
            </div>

            <!-- Available Donors -->
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Available Donors in Bangladesh</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $available_donors; ?> Available Donors</h5>
                        <p class="card-text">Number of available blood donors across Bangladesh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
