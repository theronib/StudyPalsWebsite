<meta charset="UTF-8" />
    <title>StudyPals - Оплата товару</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://js.stripe.com/v3/"></script>
    

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

    @import url('https://fonts.cdnfonts.com/css/helvetica-neue-5');

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-transform: capitalize;
        transition: all .2s linear;
    }

    .container {
        display: flex;
        justify-content: right;
        align-items: right;
        padding: 8px 50px;
        min-height: 100vh;
        background: white;
    }

    .container form {
        padding: 20px;
        width: 700px;
        background: #fff;
    }

    .container form .row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .container form .row .col {
        flex: 1 1 250px;
    }

    .container form .row .col .title {
        font-size: 20px;
        color: #333;
        padding-bottom: 5px;
        text-transform: uppercase;
    }

    .container form .row .col .inputBox {
        margin: 15px 0;
    }

    .container form .row .col .inputBox span {
        margin-bottom: 10px;
        display: block;
        text-transform: none;
    }

    .container form .row .col .inputBox input {
        width: 100%;
        border: 1px solid #ccc;
        padding: 10px 15px;
        font-size: 15px;
        text-transform: none;
    }

    .container form .row .col .inputBox input:focus {
        border: 1px solid #000;
    }

    .container form .row .col .flex {
        display: flex;
        gap: 15px;
    }

    .container form .row .col .flex .inputBox {
        margin-top: 5px;
    }

    .container form .row .col .inputBox img {
        height: 34px;
        margin-top: 5px;
        filter: drop-shadow(0 0 1px #000);
    }

    .container form .submit-btn {
        width: 100%;
        padding: 12px;
        font-size: 17px;
        margin-top: 5px;
        cursor: pointer;
        color: rgba(255, 95, 0, 255);
        background-color: white;
        border: 2px solid rgba(127, 185, 182, 255);
        border-radius: 8px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .img_logo {
        width: 660px;
        margin-top: 100px;
        height: 407px;
        display: flex;
        justify-content: left;
        align-items: left;
        padding: 8px 50px;

    }

    .container form .submit-btn:hover {
        background: rgba(255, 95, 0, 255);
        color: white;
    }

    .footer {
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: space-between;
        padding: 16px 60px;
        background-color: rgb(68, 165, 187);

    }

    @media (min-width: 768px) {
        .footer {
            flex-direction: row;
            text-align: left;
        }
    }

    .footer .text-white {
        color: white;
        margin-bottom: 0;
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

h5{
  text-decoration: underline;
}

.modal-content p{
    color: rgba(255, 95, 0, 255);
    text-transform: none !important;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

}

.modal-content li{
    text-transform: none !important;
    color: black;
}

#teacheremail, #teacherphone, #teachername{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-decoration: underline;
    color: rgba(24, 91, 115, 1);
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
  padding: 10px 19px;
  margin-top: 40px;
  font-size: 16px;
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

</style>

<body>
<div class="container">
        <div>
            <img src="logo.png" class="img_logo" alt="Sample image" onclick="location.href='website.php';" style = "cursor: pointer">
        </div>
        <form method="POST">
            <div class="row">
                <div class="col">
                    <h3 class="title" style="color: rgba(20,162,184,255);">
                        Адреса доставки
                    </h3>

                    <div class="inputBox">
                        <span>Номери товарів:</span>
                        <input type="text" name = "books_id" id="books_id" required>
                    </div>

                    <div class="inputBox">
                        <span>ПІБ:</span>
                        <input type="text" name = "customer_name" id = "customer_name" placeholder="Коваленко Олена Вікторівна" required>
                    </div>

                    <div class="inputBox">
                        <span>Електронна пошта:</span>
                        <input type="email" name = "email" id = "email" placeholder="example@example.com" required>
                    </div>

                    <div class="inputBox">
                        <span>Адреса:</span>
                        <input type="text" name = "address" id="address" placeholder="вул. Шевченка, 12" required>
                    </div>

                    <div class="inputBox">
                        <span>Місто:</span>
                        <input type="text" name = "city" id="city" placeholder="Львів" required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Область:</span>
                            <input type="text" name = "region" id="region" placeholder="Львівська" required>
                        </div>

                        <div class="inputBox">
                            <span style="text-transform: none;">Поштовий індекс:</span>
                            <input type="text" name = "postal-code" id="postal-code" placeholder="12345" required>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title" style="color: rgba(20,162,184,255);">
                        Оплата
                    </h3>
                    <div class="inputBox">
                        <span style="text-transform: none;">Приймаються такі картки:</span>
                        <img src="card_img.png" alt="cards">
                    </div>

                    <div class="inputBox">
                        <span style="text-transform: none;">Ім'я на карті:</span>
                        <input type="text" placeholder="OLENA KOVALENKO" required>
                    </div>

                    <div class="inputBox">
                        <span style="text-transform: none;">Номер карти і термін дії:</span>
                        <div name = "card-element" id="card-element"></div>
                    </div>

                    <div name = "totalAmount" id="totalAmount"></div>
                    <input type="hidden" name="totalAmount" id="totalAmountInput">

                </div>
            </div>

            <input type="submit" name = "submit_btn" value="Оплатити" class="submit-btn">
            <div class="error-message" id="error-message"></div>

        </form>
    </div>

    <?php
// Підключення до бази даних
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'Store';
$database_connection = mysqli_connect($host, $username, $password, $database);

if (!$database_connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $books_id = $_POST['books_id'];
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $postal_code = $_POST['postal-code'];
    $card_number = $_POST['card_number'];
    $total_sum = $_POST['totalAmount'];

    $ids = explode(',', $books_id);
    $all_success = true;

    foreach ($ids as $id) {
        $book_id = trim($id); 

        $insert_query = "INSERT INTO DisabledBookPayment (book_id, customer_name, email, card_number, address, city, region, postal_code, total_sum) 
                         VALUES ('$book_id', '$customer_name', '$email', '$card_number', '$address', '$city', '$region', '$postal_code', '$total_sum')";

        if (!mysqli_query($database_connection, $insert_query)) {
            $all_success = false;
            break;
        }
    }

    if ($all_success) {
        echo "
        <div id='myModal' class='modal'>
            <div class='modal-content'>
                <span class='close'>&times;</span>
                <h2>ОПЛАТА ПРОШЛА УСПІШНО!</h2>
                <p id='modal-content'>Дякуємо за оплату товару! <br>Ваш платіж успішно оброблено, і ми відправимо ваш товар якнайшвидше.</p>
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
        echo "<div id='myModal' class='modal'>
            <div class='modal-content'>
                <span class='close'>&times;</span>
                <h2>ПОМИЛКА!</h2>
                <p id='modal-content'>Вибачте за незручності, але здається, що сталася помилка при оплаті. Будь ласка, спробуйте ще раз. Дякуємо за вашу терплячість та розуміння!</p>
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
}

// Закриття з'єднання з базою даних
mysqli_close($database_connection);
?>





    <div class="footer">
        <div class="text-white">
            © 2024 StudyPals, Inc. All rights reserved.
        </div>
        <div class="social-links">
            <a href="#!" class="text-white">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>

    <script>
        var stripe = Stripe('your-publishable-key-here');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.querySelector('form');
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.createToken(card).then(function (result) {
                if (result.error) {
                    var errorMessage = document.getElementById('error-message');
                    var customMessage = 'Будь ласка, перевірте введені дані картки.';
                    errorMessage.textContent = customMessage;
                    errorMessage.style.textTransform = 'none';
                    errorMessage.style.color = 'red';
                    errorMessage.style.marginTop = '20px';
                    errorMessage.classList.add('show-error');
                } else {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);

                    form.submit();
                }
            });
        });
        form.addEventListener('submit', function (event) {
    event.preventDefault();
    
    form.submit();
});

var urlParams = new URLSearchParams(window.location.search);
    var totalAmount = urlParams.get('totalPrice');
    var booksIds = urlParams.get('ids');
        
        var totalAmountElement = document.getElementById('totalAmount');
        totalAmountElement.style.marginTop = "30px";

        totalAmountElement.style.textTransform = 'none';
        totalAmountElement.style.color = 'rgba(255, 95, 0, 255)';
        totalAmountElement.innerText = "Сума до сплати: " + totalAmount + " грн.";
        totalAmountElement.style.textDecoration = 'underline';

        var totalAmountInput = document.getElementById('totalAmountInput');
        totalAmountInput.value = totalAmount;

        var booksIdsElement = document.getElementById('books_id');
        booksIdsElement.value = booksIds;

    </script>
</body>

</html>