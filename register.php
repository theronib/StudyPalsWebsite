<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>StudyPals - Реєстрація</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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

    .col-md-8 {
        padding: 20px;
    }

    .btn {
        margin-left: -190px;
    }

    .question {
        margin-left: 265px;
        margin-top: -40px;
    }

    .modal {
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.4);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  color: rgba(255, 95, 0, 255);
    background-color: white;
    max-width: 800px; 
    margin-top: 100px; 
    margin-left: 25%;
  padding: 20px;
  width: 50%;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

}

.close {
  color: #aaa;
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 10px;
}

#confirmButton{
  color: rgba(255, 95, 0, 255);
  cursor: pointer;
  padding: 10px 19px;
  margin-top: 40px;
  font-size: 16px;
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    width: 65%;
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#confirmButton:hover {
        cursor: pointer;
        background-color: rgba(255, 95, 0, 255);
        color: white;
    }

    #passerror {
    margin-top: -75px;
    margin-left: 290px;
    font-size: 13px;
    position: absolute;
    white-space: nowrap;
}

#emailerror, #usernameerror{
    font-size: 12px;
    position: absolute;
    margin-top: 1px;
    margin-left: 3px;
    white-space: nowrap;
}

#passerror2 {
    margin-top: -75px;
    margin-left: 175px;
    font-size: 13px;
    position: absolute;
    white-space: nowrap;
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
                    <img src="logo.png" class="img-fluid" alt="Sample image" onclick="location.href='website.php';" style = "cursor: pointer">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="register.php" method="post">
                        <div data-mdb-input-init class="form-outline mb-4" id="emailDiv">
                            <label class="form-label text-info" for="email">Електронна пошта</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                placeholder="Введіть електронну пошту" required />
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4" id = "userDiv">
                            <label class="form-label text-info" for="username">Логін</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg"
                                placeholder="Введіть логін" required />
                        </div>

                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label text-info" for="password">Пароль</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                placeholder="Введіть пароль" required />
                        </div>

                        <div data-mdb-input-init class="form-outline mb-3" id="confirmPasswordDiv">
                            <label class="form-label text-info" for="confirm_password">Підтвердіть пароль</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg"
                                placeholder="Підтвердіть пароль" required />
                        </div>

                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label text-info" for="role">Виберіть роль</label>
                            <select class="form-control" id="role" name="role">
                                <option value="Учень">Учень</option>
                                <option value="Викладач">Викладач</option>
                            </select>

                        </div>

                        <div class="text-center text-lg-start pt-2">
                            <button type="submit" class="btn btn-lg">
                                Зареєструватися
                            </button>
                            <p class="question small fw-bold">Вже маєте акаунт? <a href="account/login.php" class="link-danger text-info">Увійти</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5"
            style="background-color: rgb(68, 165, 187);">
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

    <?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'WebsiteUsers';

// Підключення до бази даних
$database_connection = new mysqli($host, $username, $password, $database);

// Перевірка з'єднання
if ($database_connection->connect_error) {
    die("Connection failed: " . $database_connection->connect_error);
}

// Перевірка, чи відправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role']; 

    // Перевірка співпадіння паролів
    if ($password !== $confirm_password) {
        echo "<script>
            var errorDiv = document.createElement('div');
            errorDiv.id = 'passerror';
            errorDiv.style.color = 'red';
            errorDiv.textContent = 'Паролі не співпадають';
            var confirmPasswordDiv = document.getElementById('confirmPasswordDiv');
            confirmPasswordDiv.appendChild(errorDiv);
        </script>";
        exit;
    }

    // Перевірка довжини пароля
    if (strlen($password) < 6) {
        echo "<script>
            var errorDiv = document.createElement('div');
            errorDiv.id = 'passerror2';
            errorDiv.style.color = 'red';
            errorDiv.textContent = 'Пароль має містити не менше 6 символів';
            var confirmPasswordDiv = document.getElementById('confirmPasswordDiv');
            confirmPasswordDiv.appendChild(errorDiv);
        </script>";
        exit;
    }

    // Перевірка існування електронної пошти в базі даних
    $sql_check_email = "SELECT * FROM Users WHERE email = ?";
    $stmt_email = $database_connection->prepare($sql_check_email);
    if ($stmt_email === false) {
        die("Помилка підготовки запиту: " . $database_connection->error);
    }
    $stmt_email->bind_param("s", $email);
    $stmt_email->execute();
    $result_email = $stmt_email->get_result();
    if ($result_email->num_rows > 0) {
        echo "<script>
            var errorDiv = document.createElement('div');
            errorDiv.id = 'emailerror';
            errorDiv.style.color = 'red';
            errorDiv.textContent = 'Ця адреса електронної пошти вже використовується іншим обліковим записом';
            var emailDiv = document.getElementById('emailDiv');
            emailDiv.appendChild(errorDiv);
        </script>";
        exit;
    }

    // Перевірка існування логіну в базі даних
    $sql_check_username = "SELECT * FROM Users WHERE login = ?";
    $stmt_username = $database_connection->prepare($sql_check_username);
    if ($stmt_username === false) {
        die("Помилка підготовки запиту: " . $database_connection->error);
    }
    $stmt_username->bind_param("s", $username);
    $stmt_username->execute();
    $result_username = $stmt_username->get_result();
    if ($result_username->num_rows > 0) {
        echo "<script>
            var errorDiv = document.createElement('div');
            errorDiv.id = 'usernameerror';
            errorDiv.style.color = 'red';
            errorDiv.textContent = 'Цей логін вже використовується іншим обліковим записом';
            var userDiv = document.getElementById('userDiv');
            userDiv.appendChild(errorDiv);
        </script>";
        exit;
    }

    // Підготовка та виконання запиту на додавання користувача
    $sql_insert_user = "INSERT INTO Users (email, login, password, role, bio, city, personalnotes) VALUES (?, ?, ?, ?, NULL, NULL, NULL)";
    $stmt_insert_user = $database_connection->prepare($sql_insert_user);
    if ($stmt_insert_user === false) {
        die("Помилка підготовки запиту: " . $database_connection->error);
    }
    $stmt_insert_user->bind_param("ssss", $email, $username, $password, $role);
    if ($stmt_insert_user->execute()) {
        echo "
        <div id='myModal' class='modal'>
            <div class='modal-content'>
                <span class='close'>&times;</span>
                <h2>Реєстрація успішна!</h2>
                <p id='modal-content'>Дякуємо за реєстрацію! Ваш акаунт було успішно створено.</p>
                <button id='confirmButton'>Закрити</button>
                <br><br><br>
                <p>© 2024 StudyPals, Inc. All rights reserved.</p>
            </div>
        </div>

        <script>
        var modal = document.getElementById('myModal');
        modal.style.display = 'block';

        document.querySelector('.close').onclick = function() {
            document.getElementById('myModal').style.display = 'none';
        };
        document.getElementById('confirmButton').onclick = function() {
            document.getElementById('myModal').style.display = 'none';
        };
        </script>
        ";
    } else {
        echo "
        <div id='myModal' class='modal'>
            <div class='modal-content'>
                <span class='close'>&times;</span>
                <h2>Помилка!</h2>
                <p id='modal-content'>Вибачте за незручності, але здається, що сталася помилка при реєстрації. Будь ласка, спробуйте ще раз. Дякуємо за вашу терплячість та розуміння!</p>
                <button id='confirmButton'>Повторити спробу</button>
                <br><br><br>
                <p>© 2024 StudyPals, Inc. All rights reserved.</p>
            </div>
        </div>

        <script>
        var modal = document.getElementById('myModal');
        modal.style.display = 'block';

        document.querySelector('.close').onclick = function() {
            document.getElementById('myModal').style.display = 'none';
        };
        document.getElementById('confirmButton').onclick = function() {
            document.getElementById('myModal').style.display = 'none';
        };
        </script>
        ";
    }

    // Закриття підготовлених виразів і з'єднання з базою даних
    $stmt_email->close();
    $stmt_username->close();
    $stmt_insert_user->close();
    $database_connection->close();
}
?>



<script>
document.addEventListener("DOMContentLoaded", function() {
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");

    eyeicon.onclick = function(){
        if (password.type === "password"){
            password.type = "text";
        } else {
            password.type = "password";
        }
    };
});
</script>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>
