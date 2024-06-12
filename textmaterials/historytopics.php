<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>StudyPals - Довідкові матеріали до НМТ з історії України</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
.text-end .btn {
    color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-top: 10px;
}

.text-end .btn:hover {
        background-color: rgba(255, 95, 0, 255);
        color: white;
}


.text-end #button1 {
    margin-left: 72px;
}

.text-end #button2 {
    margin-left: 4.4px;
}

.text-end #button3 {
    margin-left: 58px;
}

</style>

<body class="">
    <header>
        <header class="p-3 text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="../website.php"
                        class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="logo.png" alt="mdo" width="180" height="140">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="../website.php" class="nav-link px-2 text-info">Головна</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-2 text-info" href="#" id="materialsDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Матеріали</a>
                            <div class="dropdown-menu" aria-labelledby="materialsDropdown">
                            <a class="dropdown-item" href="ukrtopics.php">Українська мова</a>
                <a class="dropdown-item" href="mathtopics.php">Математика</a>
                <a class="dropdown-item" href="historytopics.php">Історія України</a>
                <a class="dropdown-item" href="literaturetopics.php">Українська література</a>
                <a class="dropdown-item" href="englishtopics.php">Англійська мова</a>
                <a class="dropdown-item" href="biologytopics.php">Біологія</a>
                <a class="dropdown-item" href="geographytopics.php">Географія</a>
                <a class="dropdown-item" href="chemistrytopics.php">Хімія</a>
                <a class="dropdown-item" href="physicstopics.php">Фізика</a>

                            </div>
                        </li>

                        <li><a href="../video.php" class="nav-link px-2 text-info">Медіа</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-2 text-info" href="#" id="materialsDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Форум</a>
                            <div class="dropdown-menu" aria-labelledby="materialsDropdown">
                                <a class="dropdown-item" href="../forum_updated/index.php">Основний форум</a>
                                <a class="dropdown-item" href="../index.php">Анонімний форум</a>

                            </div>
                        </li>




                        <li><a href="https://studypalschat.netlify.app" class="nav-link px-2 text-info">Чат</a></li>
                        <li><a href="../additionallesson.php" class="nav-link px-2 text-info">Додаткові уроки</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-2 text-info" href="#" id="materialsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Магазин</a>
                            <div class="dropdown-menu" aria-labelledby="materialsDropdown">
                              <a class="dropdown-item" href="../shopregular.php">Звичайний</a>
                              <a class="dropdown-item" href="../shopfordisabled.php">Для людей з обмеженими можливостями</a>
                            </div>
                          </li>

                    </ul>

                    <?php
if(isset($_SESSION['username'])) {
    echo '<div class="text-end">';
    if ($_SESSION['role'] === 'Викладач') {
        echo '<a href="../account/dashboard_teacher.php" class="btn" id="button3">Мій особистий кабінет</a>';
    } else {
        echo '<a href="../account/dashboard.php" class="btn" id="button3">Мій особистий кабінет</a>';
    }
    echo '</div>';
} else {
    echo '<div class="text-end">';
    echo '<a href="../account/login.php" class="btn" id="button1">Логін</a>';
    echo '<a href="../register.php" class="btn" id="button2" >Реєстрація</a>';
    echo '</div>';
}
?>
                </div>
            </div>
        </header>
    </header>

    <main>
        <h1 class="pheading">Історія України:</h1>
        <div>
           
            <h5 onclick="location.href='../tests/historytests.php';">Тести</h5>
        </div>

        <section class="sec">
            <ul class="list-group">
                <li class="list-group-item" onclick="location.href='history/hi_topic1.html';">Тема 1. Первісна історія України</li>
                <li class="list-group-item" onclick="location.href='history/hi_topic2.html';">Тема 2. Козацтво</li>
                <li class="list-group-item" onclick="location.href='history/hi_topic3.html';">Тема 3. Період Великої Руїни</li>
                <li class="list-group-item" onclick="location.href='history/hi_topic4.html';">Тема 4. Російсько-турецькі війни</li>
                <li class="list-group-item" onclick="location.href='history/hi_topic5.html';">Тема 5. Перші освітні заклади</li>
                <li class="list-group-item">Тема 6. Українські землі в другій половині XVIII ст</li>
                <li class="list-group-item">Тема 7. Українські землі у складі Російської імперії</li>
                <li class="list-group-item">Тема 8. Українські землі у складі Австро-Угорщини</li>
                <li class="list-group-item">Тема 9. Україна в роки Першої світової війни</li>
                <li class="list-group-item">Тема 10. Розгортання Української революції</li>
                <li class="list-group-item">Тема 11. Утвердження більшовицького тоталітарного режиму</li>
                <li class="list-group-item">Тема 12. Україна в роки Другої світової війни</li>
                <li class="list-group-item">Тема 13. Україна в перші повоєнні роки</li>
                <li class="list-group-item">Тема 14. Україна в умовах десталінізації</li>
                <li class="list-group-item">Тема 15. Україна в період загострення кризи радянської системи</li>
                <li class="list-group-item">Тема 16. Відновлення незалежності України</li>
                <li class="list-group-item">Тема 17. Становлення України як незалежної держави</li>
                <li class="list-group-item">Тема 18. Творення нової України</li>
            </ul>
        </section>
    </main>



    <footer>
        <ul class="nav mt-3">
        <li class="nav-item"><a href="../help.php" class="nav-link px-2 text-info">Допомога</a></li>
        <li class="nav-item"><a href="../aboutus.php" class="nav-link px-2 text-info">Про нас</a></li>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="currentColor"
                        class="bi bi-twitter-x text-info" viewBox="0 0 16 16">
                        <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="70" height="24" fill="currentColor"
                        class="bi bi-instagram text-info" viewBox="1 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor"
                        class="bi bi-facebook text-info" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                </ul>
            </footer>
        </div>
    </footer>


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