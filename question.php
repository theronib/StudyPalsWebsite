<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>

#submit{
	color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 2px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
	margin-left: 15px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#answer{
	color: rgba(255, 95, 0, 255);
    background-color: white;
    border: 3px solid rgba(127, 185, 182, 255);
    border-radius: 8px;
	margin-left: 15px;
	width: 400px;
	margin-top: 30px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;	
}

.single-question{
	background-color: white;
	color: rgba(255, 95, 0, 255);
    background-color: white;
	padding: 20px 20px;
	text-decoration: underline;
	word-wrap: break-word; 
    overflow-wrap: break-word; 
    box-sizing: border-box
}

.single-answer{
    background-color: white;
	border-radius: 10px;
	width: 400px;
	color: #0b5967;
	border: 3px solid rgba(127, 185, 182, 255);
	padding: 9px 20px;
	margin-top: 15px;
	margin-left: 15px;
	word-wrap: break-word;
    overflow-wrap: break-word; 
    box-sizing: border-box
}

#advice{
	color: rgba(255, 95, 0, 255);
	margin-left: 20px;
	margin-top: 2px;
	position: absolute;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;	
}

</style>

<body>
<?php
$host = 'localhost';

$username = 'root';

$password = '';

$database = 'Forum';



$database_connection = mysqli_connect($host, $username, $password, $database);

$id = $_GET['id'];

$sql = "SELECT * FROM `question` WHERE id='$id'";
$question_query = mysqli_query($database_connection, $sql);
$question_data = mysqli_fetch_assoc($question_query);
$question = $question_data['question'];

echo "<div class='single-question'>
        <b>Анонімний користувач: $question</b>
    </div>";

if (isset($_POST['answer']) && !empty($_POST['answer'])) {
    $answer = $_POST['answer'];
    $query = "INSERT INTO `answer` (`id`, `question_id`, `answer`) VALUES (NULL, '$id', '$answer')";
    mysqli_query($database_connection, $query);
}

$answers_query = "SELECT * FROM `answer` WHERE `question_id`='$id'";
$answers_result = mysqli_query($database_connection, $answers_query);

while ($answer_data = mysqli_fetch_assoc($answers_result)) {
    $answer = $answer_data['answer'];
    echo "<div class='single-answer'>
        <p>Анонімний респондент: $answer</p>
    </div>";
}

echo "<form method='POST'>
<p id = 'advice'>Напишіть щось: </p>
        <textarea name='answer' id = 'answer' cols='50' rows='4'></textarea>
        <br/><br/>
        <input type='submit' id = 'submit' class='btn' value='Відповісти'/>
      </form>";
?>
</body>
