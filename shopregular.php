<title>StudyPals Shop</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<style>


.text-end button {
    color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-top: 10px;
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
	justify-content: space-around;
}


.nav-link.dropdown-toggle:focus {
    outline: none;
    box-shadow: none;
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
  background-color: rgba(0,0,0,0.4);
  overflow-y: hidden;

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

    .container {
        margin: auto;
        transition: 0.5s;
    }

    header .shopping {
        position: relative;
        text-align: right;
        margin-left: 1162px;
        position: absolute;
    }

    header .shopping span {
        background: red;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        position: absolute;
        top: -5px;
        left: 102%;
        padding: 2px 7px;
        line-height: 1;
    }

    .card {
        position: fixed;
        top: 0;
        left: 100%;
        width: 500px;
        background-color: white;
        height: 100vh;
        transition: 0.5s;
        outline: 0.4rem solid rgb(146, 220, 220);
        z-index: 1000;
        display: flex;
        flex-direction: column;
    }

    .active .card {
        left: calc(100% - 500px);
    }

    .active .container {
        transform: translateX(-200px);
    }

    .card h2 {
        color: rgba(255, 95, 0, 255);
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 100;
        margin: 0;
        padding: 0 20px;
        height: 100px;
        display: flex;
        align-items: center;
        position: fixed;
        background-color: white;
        width: 100%;
    }

    .card .listCard {
        flex-grow: 1;
        overflow-y: auto;
        padding: 100px 40px;
    }

    .card .checkOut {
        background-color: white;
        position: relative;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
        padding: 10px 30px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .card .checkOut div {
        width: 100%;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        color: rgba(255, 95, 0, 255);
        background-color: white;
        border-radius: 8px;
        outline: 0.2rem solid rgb(146, 220, 220);
    }

    .card .checkOut div:nth-child(2) {
        cursor: pointer;
        color: rgba(255, 95, 0, 255);
        background-color: white;
        outline: 0.2rem solid rgb(146, 220, 220);
        border-radius: 8px;
    }

    .card .checkOut div:hover {
        color: white;
        background-color: rgba(255, 95, 0, 255);
    }

    .listCard li {
        display: grid;
        grid-template-columns: 100px repeat(3, 1fr);
        color: rgba(255, 95, 0, 255);
        row-gap: 10px;
    }

    .listCard li div {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .listCard li img {
        width: 90%;
        margin-left: -50px;
    }

    .listCard li button {
        color: rgba(255, 95, 0, 255);
        background-color: white;
        border: 2px solid rgba(127, 185, 182, 255);
        border-radius: 8px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .listCard .count {
        margin: 0 10px;
    }


    .content {
        background-color: white;
        padding: 0 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        color: rgba(255, 95, 0, 255);
        outline: 0.9rem solid rgb(146, 220, 220);
        border-radius: 10px;
        height: 50vh;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .content h1 {
        font-size: 40px;
    }

    .content p {
        font-size: 20px;
        margin-top: 20px;
        color: #424144;
    }

    .content #shop_img {
        height: 280px;
        width: 5%;
        padding: 0 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    .content button {
        margin-top: 30px;
        padding: 15px 30px;

        color: rgba(255, 95, 0, 255);
        background-color: white;
        font-size: 20px;
        border: 2px solid rgba(127, 185, 182, 255);
        border-radius: 8px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .pheading {
        text-align: center;
        margin: 10px 0;
        color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }

    #closecart {
        cursor: pointer;
        margin-top: 40px;
        margin-left: 455px;
        width: 25px;
        height: 25px;
        position: absolute;
        z-index: 1000;
    }

    .btn {
        color: rgba(255, 95, 0, 255);
        background-color: white;
        border: 2px solid rgba(127, 185, 182, 255);
        border-radius: 8px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .price {
        color: rgba(255, 95, 0, 255);
        font-size: 18px;
        font-weight: bold;
    }

    .btn:hover {
        cursor: pointer;
        background-color: rgba(255, 95, 0, 255);
        color: white;
    }

    .sec {
        background-color: white;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        outline: 0.2rem solid rgb(146, 220, 220);
        padding: 10px;
        margin-bottom: 30px;
    }

    .lead {
        color: black;
        font-size: 16px;
    }

    .type {
        text-decoration: underline;
        font-size: 18px;
    }

    .name {
        font-weight: 12px;
    }

    .card-img-top {
        padding: 0 7%;
        transition: 0.5s;
    }

    .list {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        justify-content: center;
        grid-column-gap: 15px;
    }

    .list .items {
        width: 310px;
        background-color: white;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        outline: 0.2rem solid rgb(146, 220, 220);
        padding: 5px;
        margin-bottom: 20px;
    }

    .list .items img {
        height: 280px;
        width: 100%;
        padding: 0 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    .list .items .desc {
        padding: 5px 20px;
        opacity: 0.8;
        text-decoration: underline;
    }

    .list .items .title {
        font-weight: 900;
        font-size: 17px;
        color: #424144;
        padding: 0 20px;
    }

    .list .items .box {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .list .items .box .price {
        color: rgba(255, 95, 0, 255);
        font-size: 15.5px;
        font-weight: bold;
    }

    .list .items .box .btn {
        color: rgba(255, 95, 0, 255);
        background-color: white;
        border: 2px solid rgba(127, 185, 182, 255);
        border-radius: 8px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .list .items .box .btn:hover {
        cursor: pointer;
        background-color: rgba(255, 95, 0, 255);
        color: white;
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
            <li><a href="additionallesson.php" class="nav-link px-2 text-info">Додаткові уроки</a></li>
            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-2 text-info" href="#" id="materialsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Магазин</a>
                            <div class="dropdown-menu" aria-labelledby="materialsDropdown">
                              <a class="dropdown-item" href="shopregular.php">Звичайний</a>
                              <a class="dropdown-item" href="shopfordisabled.php">Для людей з обмеженими можливостями</a>
                            </div>
                          </li>

                          <div class="shopping">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" id="cart"
                                class="bi bi-cart4 text-info" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg>
                            <span class="quantity">0</span>
                        </div>
          </ul>


         
        </div>
      </div>
    </header>
  </header>
<br/><br/>

<div class="wrapper" style = 'background: rgba(20,162,184,255); margin-top: -48px;'>
        <section class="py-3 py-md-5">
            <div class="container">
                <section class="content">
                <h1>Разом до успіху!</h1>
                    <p>Свіжі посібники та тестові завдання для підготовки <br> до НМТ в нашому онлайн магазині.</p>
                    <div class="img" style="margin-left: 670px; position: absolute;">
                        <img src="shop.png" alt="item1" style="max-width: 300px; max-height: 300px;">
                    </div>

                    <a href="#favs">
                        <button>Перейти до магазину</button>
                    </a>
                </section>
            </div>
        </section>
        <section class="container" id="favs">
        <h1 class='pheading'>Наші фаворити:</h1>
                <div class="list">

<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'Store';
$database_connection = mysqli_connect($host, $username, $password, $database);


$book_query = "SELECT * FROM `Books`";
$book_result = mysqli_query($database_connection, $book_query);

while ($book_data = mysqli_fetch_assoc($book_result)) {
    $id = $book_data['id'];
    $description = $book_data['description'];
    $name = $book_data['name'];
    $image = $book_data['image'];
    $price = $book_data['price'];

    echo "

    <div id='purchaseModal' class='modal'>
    <div class='modal-content'>
      <span class='close' onclick='closeModal()'>&times;</span>
      <div id='modal-content'></div>
      <button id='confirmButton'>Підтвердити покупку</button>
    </div>
  </div>

  <div class='items'>
            <div class='img'><img src='$image' alt='item$id'></div>
            <div class='desc'>$description</div>
            <div class='title'>$name</div>
            <div class='box'>
            <div class='price'>" . number_format($price, 2) . " грн.</div>
            <button class='btn flex-shrink-0' type='button' onclick='addToCart($id)'>
            <i class='bi-cart-fill me-1'></i>
            Додати в корзину
        </button>
            </div>
        </div>
";

}

?>
</section>

</section>

</div>

<div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-x-circle-fill text-info" viewBox="0 0 16 16" id="closecart">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
        </svg>
        <h2>Корзина</h2>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total" style="pointer-events: none;">Сума: 0 грн.</div>
            <a href="payment.html" onclick="redirectToPayment(event)" style="text-decoration: none;">
                <div class="closeShopping">Оплатити</div>
            </a>

        </div>
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



<script>
        let openShopping = document.querySelector('.shopping');
        let closeShopping = document.querySelector('.closeShopping');

        let close_cart = document.getElementById('closecart');

        let list = document.querySelector('.list');
        let listCard = document.querySelector('.listCard');
        let body = document.querySelector('body');
        let total = document.querySelector('.total');
        let quantity = document.querySelector('.quantity');


        openShopping.addEventListener('click', () => {
            body.classList.add('active');
        })

        close_cart.addEventListener('click', () => {
            body.classList.remove('active');
        })

        let products = [
            {
                id: 1,
                description: "Українська мова",
                name: 'НМТ 2024. Тестові завдання у форматі НМТ 2024 - Авраменко Олександр.',
                image: 'book1.JPG',
                price: 145
            },
            {
                id: 2,
                description: "Українська література",
                name: 'НМТ 2024. Тестові завдання у форматі НМТ 2024. Витвицька С.',
                image: 'book2.JPG',
                price: 95
            },
            {
                id: 3,
                description: "Англійська мова",
                name: 'НМТ 2024. Експрес-підготовка до НМТ-2024. Ільченко В.',
                image: 'book3.JPG.WEBP',
                price: 200
            },
            {
                id: 4,
                description: "Математика",
                name: 'НМТ 2024. Усе для підготовки до НМТ в режимі онлайн і офлайн',
                image: 'book4.JPG',
                price: 79
            },
            {
                id: 5,
                description: "Історія України",
                name: 'НМТ 2024. Усе для підготовки до НМТ в режимі онлайн і офлайн.',
                image: 'book5.JPG',
                price: 250
            },
            {
                id: 6,
                description: "Біологія",
                name: 'НМТ 2024. Тестові завдання у форматі НМТ 2024. Барна І.',
                image: 'book6.JPG',
                price: 100
            },
            {
                id: 7,
                description: "Фізика",
                name: 'НМТ 2024. 10 варіантів у форматі НМТ. Гайда В.Я., Гандзій Р.Я., Семенюк С.І.',
                image: 'book7.JPG',
                price: 80
            },
            {
                id: 8,
                description: "Хімія",
                name: 'НМТ 2024. Тестові завдання у форматі НМТ 2024. Березан О.',
                image: 'book8.JPG',
                price: 80
            }

        ];

        let listCards = [];

        function addToCart(productId) {
    let product = products.find(p => p.id === productId);
    if (product) {
        let existingProduct = listCards.find(p => p.id === productId);
        if (existingProduct) {
            existingProduct.quantity += 1;
        } else {
            let productCopy = { ...product, quantity: 1 };
            listCards.push(productCopy);
        }
        reloadCard();
        document.body.classList.add('active');
    } else {
        console.error('Продукт не знайдено');
    }
}

let totalPrice = 0;

        function reloadCard() {
            listCard.innerHTML = '';
            totalPrice = 0;
            let count = 0;
            listCards.forEach((value, key) => {
                totalPrice = totalPrice + value.price;
                count = count + value.quantity;
                if (value != null) {
                    let newDiv = document.createElement('li');
                    newDiv.innerHTML = `
                <div><img src="${value.image}"/></div>
                <div style = "font-size: 11.5px;">${value.name}</div>
                <div>${value.price.toLocaleString()} грн.</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                    listCard.appendChild(newDiv);
                }
            })
            total.innerText = "Сума: " + totalPrice.toLocaleString() + " грн."

            quantity.innerText = count;
        }
        function changeQuantity(key, quantity) {
            if (quantity == 0) {
                delete listCards[key];
            } else {
                listCards[key].quantity = quantity;
                listCards[key].price = quantity * products[key].price;
            }
            reloadCard();
        }



function redirectToPayment(event) {
    event.preventDefault();
    body.classList.remove('active');
    let modal = document.getElementById("purchaseModal");
    let modalContent = document.getElementById("modal-content");

    let cartDetails = listCards.map(item => {
        return `${item.id}. ${item.name} (${item.description}): ${item.price} грн x ${item.quantity}`;
    }).join("<br>");
    
    modalContent.innerHTML = `Ви хочете підтвердити покупку наступних підручників? <br><br> ${cartDetails}<br><br> Ціна: ${totalPrice.toLocaleString()} грн. <br><br>`;
    modal.style.display = "block";

    let confirmButton = document.getElementById("confirmButton");
    confirmButton.onclick = function() {
        event.preventDefault();
        let ids = listCards.map(item => item.id).join(',');
        let prices = listCards.map(item => item.price).join(',');
        let paymentURL = `paymentregular.php?ids=${ids}&prices=${prices}&totalPrice=${totalPrice}`;
        window.location.href = paymentURL;
    }
}

function closeModal() {
    body.classList.add('active');
    let modal = document.getElementById("purchaseModal");
    modal.style.display = "none";
}

   </script>

<script>
        document.querySelectorAll('.detailed-img').forEach(img => {
            img.addEventListener('mouseenter', () => {
                img.classList.add('active');
                img.previousElementSibling.style.opacity = '0';
            });
            img.addEventListener('mouseleave', () => {
                img.classList.remove('active');
                img.previousElementSibling.style.opacity = '1';
            });
        });

    </script>