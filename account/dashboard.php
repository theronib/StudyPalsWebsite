<?php
session_start();

// Перевірка, чи користувач увійшов
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Підключення до бази даних
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'WebsiteUsers';

$database_connection = new mysqli($host, $username, $password, $database);

// Перевірка з'єднання
if ($database_connection->connect_error) {
    die("Connection failed: " . $database_connection->connect_error);
}

// Обробка POST-запитів
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['update_profile'])) {
      $bio = $database_connection->real_escape_string($_POST['bio']);
      $city = $database_connection->real_escape_string($_POST['city']);
      $username = $_SESSION['username'];

      $update_profile_query = "UPDATE Users SET bio='$bio', city='$city' WHERE login='$username'";
      if ($database_connection->query($update_profile_query) === TRUE) {
          $_SESSION['bio'] = $bio; 
          $_SESSION['city'] = $city;
          echo " <script>
          alert('Профіль успішно оновлено')
           </script>";
      } else {
          echo " <script>
          alert(`Помилка оновлення профілю: {$database_connection->error}`)
           </script>";
      }
  }

    if (isset($_POST['update_account'])) {
        $new_email = $database_connection->real_escape_string($_POST['email']);
        $new_username = $database_connection->real_escape_string($_POST['new_username']);
        $username = $_SESSION['username'];

        // Перевірка наявності нового імені користувача чи електронної пошти в базі даних
        $check_username_query = "SELECT * FROM Users WHERE login='$new_username'";
        $check_email_query = "SELECT * FROM Users WHERE email='$new_email'";
        $username_result = $database_connection->query($check_username_query);
        $email_result = $database_connection->query($check_email_query);

        if ($username_result->num_rows > 0 && $new_username != $username) {
          echo " <script>
          alert('Цей логін вже використовується іншим обліковим записом')
           </script>";
        } elseif ($email_result->num_rows > 0 && $new_email != $_SESSION['email']) {
          echo " <script>
          alert('Ця адреса електронної пошти вже використовується іншим обліковим записом')
           </script>";
        } else {
            $update_account_query = "UPDATE Users SET email='$new_email', login='$new_username' WHERE login='$username'";
            if ($database_connection->query($update_account_query) === TRUE) {
                $_SESSION['username'] = $new_username; // Оновити сесію з новим іменем користувача
                $_SESSION['email'] = $new_email;
                echo " <script>
                alert('Акаунт було успішно оновлено')
                 </script>";
            } else {
              echo " <script>
              alert(`Помилка оновлення акаунта: {$database_connection->error}`)
               </script>";
            }
        }
    }

    if (isset($_POST['update_password'])) {
      $old_password = $database_connection->real_escape_string($_POST['old_password']);
      $new_password = $database_connection->real_escape_string($_POST['new_password']);
      $confirm_password = $database_connection->real_escape_string($_POST['confirm_password']);
      $username = $_SESSION['username'];
  
      if ($new_password != $confirm_password) {
          echo "<script>
          alert('Паролі не співпадають');
          </script>";
      } else {
          // Перевірка старого пароля
          $password_query = "SELECT password FROM Users WHERE login='$username'";
          $result = $database_connection->query($password_query);
  
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              
              if ($old_password === $row['password']) { // Просте порівняння текстових паролів
                  $update_password_query = "UPDATE Users SET password='$new_password' WHERE login='$username'";
                  if ($database_connection->query($update_password_query) === TRUE) {
                      echo "<script>
                      alert('Пароль було успішно оновлено');
                      </script>";
                  } else {
                      echo "<script>
                      alert('Помилка оновлення пароля: " . $database_connection->error . "');
                      </script>";
                  }
              } else {
                  echo "<script>
                  alert('Старий пароль невірний');
                  </script>";
              }
          } else {
              echo "<script>
              alert('Користувача не знайдено');
              </script>";
          }
      }
  }
  
    if (isset($_POST['update_notes'])) {
        $notes = $database_connection->real_escape_string($_POST['notes']);
        $username = $_SESSION['username'];

        $update_notes_query = "UPDATE Users SET personalnotes='$notes' WHERE login='$username'";
        if ($database_connection->query($update_notes_query) === TRUE) {
          $_SESSION['personalnotes'] = $notes;
            echo " <script>
            alert('Ваші нотатки були успішно оновлені')
             </script>";

        } else {
            echo " <script>
            alert(`Помилка оновлення нотаток: {$database_connection->error}`)
             </script>";
        }
    }

    if (isset($_POST['delete_account'])) {
        $username = $_SESSION['username'];

        $delete_account_query = "Delete from Users WHERE login='$username'";
        if ($database_connection->query($delete_account_query) === TRUE) {
            session_destroy();
            echo " <script>
            alert('Ваш акаунт було видалено');
             window.location.href = '../website.php';
             </script>";

        } else {
            echo " <script>
            alert(`Помилка видалення акаунта: {$database_connection->error}`)
             </script>";
        }
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>StudyPals - Мій особистий кабінет</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<style>
body{
    color: #1a202c;
    text-align: left;
    background-color: rgba(20, 162, 184, 255); 
    max-height: 1px;
}

header{
    background-color: white;
}

#settings{
    padding: 25px;
}

.main-body {
    padding: 15px;
}

.nav-link {
    color: #4a5568;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.d-flex img {
    position: absolute;
    margin-top: 14px;
    z-index: 1;
}

#menu {
    margin-left: 200px;
    margin-top: 10px;
}

#menu li {
    font-size: 17px;
    font-weight: bold;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
}


.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

.breadcrumb > .active {
  color: rgba(255, 95, 0, 255);
   text-decoration: none;
}

.breadcrumb, .breadcrumb a{
    color: rgba(20, 162, 184, 255);
}

.breadcrumb-item+.breadcrumb-item::before{
    content: '>';
}

.breadcrumb{
    background-color: white;
}

.text-end button {
    color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-top: 10px;
}

.btn-danger{
  border-radius: 8px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

}

.text-end #button1 {
    margin-left: 730px;
}

.nav-item.nav-link.active {
    background-color: rgba(255, 95, 0, 255);
}

.update-btn{
    color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.update-btn:hover {
        cursor: pointer;
        background-color: rgba(255, 95, 0, 255);
        color: white;
    }


</style>
<body>

<header>
    <header class="p-3 text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="../website.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="logo.png" alt="mdo" width="180" height="140">
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" id = "menu">
            <li><a href="../website.php" class="nav-link px-2 text-info">Головна</a></li>
          </ul>

          <div class="text-end">
          <a href="logout.php">
              <button type="button" class="btn update-btn" id="button1">Вийти</button>
            </a>
          </div>


        </div>
      </div>
    </header>
  </header>

  <div class="container" id="settings">
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../website.php">Головна сторінка</a></li>
            <li class="breadcrumb-item">Користувач</li>
            <li class="breadcrumb-item active" aria-current="page">Налаштування</li>
        </ol>
    </nav>

    <div class="row gutters-sm">
        <div class="col-md-4 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                    <nav class="nav flex-column nav-pills nav-gap-y-1">
                        <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Інформація профілю
                        </a>
                        <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Налаштування аккаунта
                        </a>
                        <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Безпека
                        </a>
                        <a href="#notes" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="19" fill="currentColor" class="bi bi-stickies" viewBox="2 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1z"/>
                                <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293z"/>
                            </svg> Нотатки
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-bottom mb-3 d-flex d-md-none">
                    <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                        <li class="nav-item">
                            <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#notes" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1z"/>
                                <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293z"/>
                            </svg></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane active" id="profile">
                        <h6>ІНФОРМАЦІЯ ВАШОГО ПРОФІЛЮ</h6>
                        <hr>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="fullName">Ваша почта</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $_SESSION['email']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="fullName">Ваш логін</label>
                                <input type="text" class="form-control" id="fullName" aria-describedby="fullNameHelp" value="<?php echo $_SESSION['username']; ?>" disabled>
                                <small id="fullNameHelp" class="form-text text-muted">Ваш логін може з'явитися тут, де вас згадано. Ви можете змінити або видалити його в будь-який момент.</small>
                            </div>
                            <div class="form-group">
                                <label for="fullName">Ваша роль</label>
                                <input type="text" class="form-control" id="role" aria-describedby="roleHelp" value="<?php echo $_SESSION['role']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="bio">Ваша біографія</label>
                                <textarea class="form-control autosize" id="bio" name="bio" placeholder="Напишіть щось про себе" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;"><?php echo $_SESSION['bio']; ?></textarea>

                            </div>
                            <div class="form-group">
                                <label for="location">Місцезнаходження</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Введіть своє місцезнаходження" value="<?php echo $_SESSION['city']; ?>">
                            </div>
                            <div class="form-group small text-muted">
                                Такі поля, як біографія та місцезнаходження, на цій сторінці є необов'язковими та можуть бути видалені в будь-який час. Заповнюючи їх, ви даєте нам згоду на поширення цих даних там, де з'являється ваш користувацький профіль.
                            </div>
                            <button type="submit" name="update_profile" class="btn update-btn">Оновити профіль</button>
                        </form>
                        <hr>
                    </div>
                    <div class="tab-pane" id="account">
                        <h6>НАЛАШТУВАННЯ АККАУНТА</h6>
                        <hr>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="email">Змінити почту</label>
                                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email" value="<?php echo $_SESSION['email']; ?>">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="new_username">Змінити логін</label>
                                <input type="text" class="form-control" id="new_username" name="new_username" aria-describedby="usernameHelp" placeholder="Enter your new username" value="<?php echo $_SESSION['username']; ?>">
                                <small id="usernameHelp" class="form-text text-muted">Після того, як ви зміните своє ім'я користувача, ваше попереднє ім'я стане доступним для будь-якого іншого користувача для використання.</small>
                                <br>
                                <button type="submit" name="update_account" class="btn update-btn">Оновити акаунт</button>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="d-block text-danger">Видалити аккаунт</label>
                                <p class="text-muted font-size-sm">Перед видаленням облікового запису, будь ласка, обов'язково переконайтеся в своєму рішенні. Після видалення облікового запису відновлення буде неможливим.</p>
                            </div>
                            <button class="btn btn-danger" type="submit" name = "delete_account" >Видалити аккаунт</button>
                            <hr>
                        </form>
                    </div>
                    <div class="tab-pane" id="security">
                        <h6>НАЛАШТУВАННЯ БЕЗПЕКИ</h6>
                        <hr>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label class="d-block">Змінити пароль</label>
                                <input type="password" class="form-control" name="old_password" placeholder="Введіть свій старий пароль">
                                <input type="password" class="form-control mt-1" name="new_password" placeholder="Введіть новий пароль">
                                <input type="password" class="form-control mt-1" name="confirm_password" placeholder="Підтвердіть новий пароль">
                            </div>
                            <small id="usernameHelp" class="form-text text-muted">Щоб змінити пароль, введіть свій поточний пароль, новий пароль та підтвердіть новий пароль. Рекомендується, щоб ваш новий пароль містив щонайменше 8 символів, літери різного регістру, цифри та спеціальні символи. Переконайтеся, що ваш новий пароль є унікальним і не використовується для інших облікових записів.</small>
                            <br>
                            <button type="submit" name="update_password" class="btn update-btn">Змінити пароль</button>
                        </form>
                        <hr>
                        <br>
                        <br>
                    </div>
                    <div class="tab-pane" id="notes">
                        <h6>НОТАТКИ</h6>
                        <hr>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="notes">Ваші нотатки</label>
                                <div data-mdb-input-init class="form-outline">
    <textarea class="form-control" name="notes" placeholder="Напишіть щось..." id="textAreaExample1" rows="7"><?php echo htmlspecialchars($_SESSION['personalnotes']); ?></textarea>
    <label class="form-label" for="textAreaExample"></label>
</div>

                                <small id="usernameHelp" class="form-text text-muted">Це поле призначене для ваших особистих нотаток. Ви можете зберігати тут будь-яку інформацію, яку вважаєте важливою. Нотатки є приватними і доступні тільки вам.</small>
                            </div>
                            <button type="submit" name="update_notes" class="btn update-btn">Оновити нотатки</button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color: white">
    <div class="mb-md-0" style="color: rgb(68, 165, 187);">
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
</body>
</html>