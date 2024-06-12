<?php
session_start();
?>

<title>StudyPals - Бронювання уроку</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<style>



.text-end .btn {
    color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-top: 10px;
}


.text-end #button3 {
    margin-left: 58px;
}

.text-end #button1 {
    margin-left: 72px;
}

.nav {
    margin-left: 200px;
    margin-top: 10px;
}

.nav li {
    font-size: 17px;
    font-weight: bold;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
}

.d-flex img {
    position: absolute;
    margin-top: 14px;
    z-index: 1;
}

html, body {
	padding: 0;
	margin: 0;
}

h3{
	color: white;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.single-question {
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  	transition: 0.3s;
	padding: 10px;
	width: 50%;
	margin: 5px;
	margin-bottom: 20px;
	background: white;
    border: 1px solid #ccc; 
}

.single-question > b > a {
	color: rgba(255, 95, 0, 255);

}

.wrapper {
	display: flex;
	flex-flow: column;
	align-items: center;
	justify-content: space-around;
}

#search-btn{
	color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.nav-link.dropdown-toggle:focus {
    outline: none;
    box-shadow: none;
}

#search-btn{
  position: static; 
  margin-left: 370px; 
  margin-top: -90px;
  margin-bottom: 40px;
}

#form1{
  display: inline-flex;
  gap: 20px;
  margin-left: -70px;
  padding: 20px;
}

.mt-4{
  color: white;
  font-size: 17px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#subject{
  color: rgba(255, 95, 0, 255);
  font-weight: bold;
}

.btn{
  color: rgba(255, 95, 0, 255);
        background-color: white;
        border: 2px solid rgba(127, 185, 182, 255);
        border-radius: 8px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.btn:hover {
        cursor: pointer;
        background-color: rgba(255, 95, 0, 255);
        color: white;
    }

    #price{
        color: rgba(255, 95, 0, 255);
        font-weight: bold;
    }

    .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  color: rgba(255, 95, 0, 255);
    background-color: white;
  margin: 15% auto;
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

h5{
  text-decoration: underline;
}

.close:hover,
.close:focus {
  color: black;
  text-align: left;
  text-decoration: none;
  cursor: pointer;
}

#confirmButton{
  color: rgba(255, 95, 0, 255);
  cursor: pointer;
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#confirmButton:hover {
        cursor: pointer;
        background-color: rgba(255, 95, 0, 255);
        color: white;
    }

    #confirmLoginButton, #confirmSignUpButton{
  color: rgba(255, 95, 0, 255);
  width: 50%;
  padding: 10px 19px;
  margin-top: 40px;
  font-size: 16px;
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#confirmLoginButton:hover, #confirmSignUpButton:hover {
        cursor: pointer;
        background-color: rgba(255, 95, 0, 255);
        color: white;
    }

  .modal #disclaimer{
    margin-top: 60px; 
    padding: 40px;

  }



		</style>

  <header>
    <header class="p-3 text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="website.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="logo.png" alt="mdo" width="180" height="140">
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="website.php" class="nav-link px-2 text-info">Головна</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle px-2 text-info" href="#" id="materialsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Матеріали</a>
              <div class="dropdown-menu" aria-labelledby="materialsDropdown">
                               <a class="dropdown-item" href="textmaterials/ukrtopics.php">Українська мова</a>
                                <a class="dropdown-item" href="textmaterials/mathtopics.php">Математика</a>
                                <a class="dropdown-item" href="textmaterials/historytopics.php">Історія України</a>
                                <a class="dropdown-item" href="textmaterials/literaturetopics.php">Українська
                                    література</a>
                                <a class="dropdown-item" href="textmaterials/englishtopics.php">Англійська мова</a>
                                <a class="dropdown-item" href="textmaterials/biologytopics.php">Біологія</a>
                                <a class="dropdown-item" href="textmaterials/geographytopics.php">Географія</a>
                                <a class="dropdown-item" href="textmaterials/chemistrytopics.php">Хімія</a>
                                <a class="dropdown-item" href="textmaterials/physicstopics.php">Фізика</a>
                            </div>
            </li>
        
            <li><a href="video.php" class="nav-link px-2 text-info">Медіа</a></li>


             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle px-2 text-info" href="#" id="materialsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Форум</a>
              <div class="dropdown-menu" aria-labelledby="materialsDropdown">
                <a class="dropdown-item" href="forum_updated/index.php">Основний форум</a>
                <a class="dropdown-item" href="index.php">Анонімний форум</a>
              
              </div>
            </li>

            <li><a href="https://studypalschat.netlify.app" class="nav-link px-2 text-info">Чат</a></li>
            <li><a href="#" class="nav-link px-2 text-info">Додаткові уроки</a></li>
            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-2 text-info" href="#" id="materialsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Магазин</a>
                            <div class="dropdown-menu" aria-labelledby="materialsDropdown">
                              <a class="dropdown-item" href="shopregular.php">Звичайний</a>
                              <a class="dropdown-item" href="shopfordisabled.php">Для людей з обмеженими можливостями</a>
                            </div>
                          </li>


          </ul>

          <?php
if(isset($_SESSION['username'])) {
  echo '<div class="text-end">';
  if ($_SESSION['role'] === 'Викладач') {
      echo '<a href="account/dashboard_teacher.php" class="btn" id="button3">Мій особистий кабінет</a>';
  } else {
      echo '<a href="account/dashboard.php" class="btn" id="button3">Мій особистий кабінет</a>';
  }
  echo '</div>';
} else {
    echo "
        <div id='myModal' class='modal'>
            <div class='modal-content' id = 'disclaimer'>
                <h2>УПС...</h2>
                <p id='modal-content'>Щоб отримати повний доступ до контенту та функціоналу сайту, будь ласка, авторизуйтесь у свій обліковий запис або зареєструйтеся. <br><br>  Це дозволить вам отримувати доступ до цікавого та корисного контенту, а також використовувати усі функції сайту.</p>
                <button id='confirmLoginButton'>Логін</button>
                <button id='confirmSignUpButton'>Реєстрація</button>
                <br><br><br>
                <p>© 2024 StudyPals, Inc. All rights reserved.</p>
            </div>
        </div>

        <script>
        var modal = document.getElementById('myModal');
        modal.style.display = 'block';

        document.getElementById('confirmLoginButton').onclick = function() {
            window.location.href = 'account/login.php';
        };

        document.getElementById('confirmSignUpButton').onclick = function() {
            window.location.href = 'register.php';
        };


        </script>
        ";
}
?>

         
        </div>
      </div>
    </header>
  </header>
<br/><br/>

<div class="wrapper" style = 'background: rgba(20,162,184,255); margin-top: -48px;'>
<p class = "mt-4">Щоб знайти додатковий урок, будь ласка, оберіть предмет або виберіть дату.</p>
<form action = "" method = "GET" id = "form1">
    <select class="form-control" id="formcontrol">
      <option>Українська мова</option>
      <option>Математика</option>
      <option>Історія України</option>
      <option>Українська література</option>
      <option>Англійська мова</option>
      <option>Біологія</option>
      <option>Географія</option>
      <option>Хімія</option>
      <option>Фізика</option>
    </select>

  
    <section class="container">
        <form>
        <div class="row form-group">
    <div>
        <div class="input-group date" id="datepicker">
        <input type="date" id = "datepicker" name = "date" class="form-control">
            <span class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-calendar"></i>
                </span>
            </span>
        </div>
    </div>
</div>

        </form>
    </section>
	<input type="submit" class="btn" id = "search-btn" value="Знайти">
</form>

<h3>Доступні уроки:</h3>



<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'Lessons';
$database_connection = mysqli_connect($host, $username, $password, $database);


$lessons_query = "SELECT * FROM `Lessons`";
$lessons_result = mysqli_query($database_connection, $lessons_query);

while ($lesson_data = mysqli_fetch_assoc($lessons_result)) {
    $Lessons = $lesson_data['Lessons'];
    $id = $lesson_data['LessonID'];
    $subject = $lesson_data['SubjectName'];

$date = $lesson_data['LessonDate'];
    $time = date('H:i', strtotime($lesson_data['LessonTime']));
    $teacher = $lesson_data['TeacherName'];
    $price = $lesson_data['Price'];

    $teacheremail = $lesson_data['TeacherEmail'];
    $teacherphone = $lesson_data['TeacherPhone'];


echo "<div class='single-question'>
<h4 id = 'id' style = 'display: none'>$id</h4>
<h4 id = 'subject'>$subject</h4>
<div style = 'display: inline-flex; gap: 6px;'> 
<p>Дата: </p>
<p class='date'>$date.</p>
<p id='time'>Час: $time</p>
</div>
<p id = 'teacherName'>Вчитель: $teacher</p>
<p id = 'teacherPhone' style = 'display: none'>Номер телефона: $teachephone</p>
<p id = 'teacherEmail' style = 'display: none'>Почта: $teacheremail</p>
<div style = 'display: inline-flex; gap: 6px;'> 
<p>Ціна: </p>
<p id = 'price'>$price</p>
<p>грн.
</div>
<br>
<div class='btn' onclick='confirmLesson(this)'>Забронювати урок</div>
</div>

<div id='myModal' class='modal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <h5>Інформація про додатковий урок: </h5>
    <p id='modal-content'></p>
    <button id='confirmButton'>Підтвердити бронювання</button>
  </div>
</div>
";



}

?>

</div>

<footer>
        <ul class="nav mt-3">
        <li class="nav-item"><a href="help.php" class="nav-link px-2 text-info">Допомога</a></li>
        <li class="nav-item"><a href="aboutus.php" class="nav-link px-2 text-info">Про нас</a></li>
        </ul>
    <div class="container mb-1">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
              <use xlink:href="#bootstrap"></use>
            </svg>
          </a>
          <span class="text-muted">© 2024 StudyPals, Inc. All rights reserved.</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="currentColor" class="bi bi-twitter-x text-info"
            viewBox="0 0 16 16">
            <path
              d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
          </svg> <svg xmlns="http://www.w3.org/2000/svg" width="70" height="24" fill="currentColor"
            class="bi bi-instagram text-info" viewBox="1 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-facebook text-info"
            viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
          </svg>
        </ul>
      </footer>
    </div>
  </footer>

<script type="text/javascript">
    $(document).ready(function() {
        $('#formcontrol').on('change', function () {
            search_div($(this).val());
        });
    });

    function search_div(value) {
        $('.single-question').each(function() {
            var found = false;
            $(this).each(function() {
                if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                    found = true;
                }
            });
            if (found) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#search-btn').on('click', function(e) {
            e.preventDefault();
            var selectedDate = $('input[name="date"]').val(); 
            console.log(selectedDate); 
            search_by_date(selectedDate); 
        });
    });

    function search_by_date(selectedDate) {
        $('.single-question').each(function() {
            var date = $(this).find('.date').text().trim(); 
            date = date.replace('.', '');
            if (date === selectedDate) { 
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
</script>

<script>

  function confirmLesson(btn) {
  var questionContainer = btn.closest('.single-question');

  var id = questionContainer.querySelector('#id').textContent;
  var subject = questionContainer.querySelector('#subject').textContent;
  var price = questionContainer.querySelector('#price').textContent;

  var modal = document.getElementById("myModal");
  var modalContent = document.getElementById("modal-content");
  modalContent.innerHTML = id + ". Предмет: " + subject + ". " + "Ціна: " + price + " грн. " + "<br>Підтверджуєте бронювання?";
  modal.style.display = "block";

  var closeButton = document.getElementsByClassName("close")[0];
  closeButton.onclick = function() {
    modal.style.display = "none";
  }

  var confirmButton = document.getElementById("confirmButton");
  confirmButton.onclick = function() {
    event.preventDefault();


let paymentURL = "lessonpayment.php?id=" + id;
window.location.href = paymentURL;
  }
}

</script>
