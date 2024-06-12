<?php
session_start();

if (isset($_SESSION['username'])) {
    if ($_SESSION['role'] === 'Викладач') {
        header("Location: dashboard_teacher.php");
    } else {
        header("Location: dashboard.php");
    }
    exit;
}

$db_host = 'localhost'; 
$db_username = 'root'; 
$db_password = ''; 
$db_name = 'WebsiteUsers'; 

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, email, role FROM Users WHERE login = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] === 'Викладач') {
            header("Location: dashboard_teacher.php");
        } else {
            header("Location: dashboard.php");
        }
        exit;
    } else {
        $error_message = "Ваш логін чи пароль невірний";
        echo "<script>alert('$error_message');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>StudyPals - Логін</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .h-custom {
        height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
    label {
        font-weight: bold;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }

    .btn-lg{
        padding-left: 2.5rem; 
        padding-right: 2.5rem; 
        background-color: white; 
        color: rgba(255, 95, 0, 255); 
        border: 2px solid rgba(127, 185, 182, 255);
    }

    .btn-lg:hover{
        background-color: rgba(255, 95, 0, 255);
        color: white;
    }

</style>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="logo.png" class="img-fluid" alt="Sample image" onclick="location.href='../website.php';" style = "cursor: pointer">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label text-info" for="form3Example3">Логін</label>
                            <input type="text" id="form3Example3" class="form-control form-control-lg" name="username" placeholder="Введіть свій логін" required />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label text-info" for="form3Example4">Пароль</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" placeholder="Введіть свій пароль" required />
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">

                            <button type="submit" class="btn btn-lg" name="login">Увійти</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Не маєте акаунту? <a href="../register.php" class="link-danger text-info">Зареєструватися</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color: rgb(68, 165, 187);">
            <div class="text-white mb-md-0">
                © 2024 StudyPals, Inc. All rights reserved.
            </div>
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </section>

</body>
</html>
