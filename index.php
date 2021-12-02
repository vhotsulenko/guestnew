<?php
//Подключим файл с описанием класса mybook
require 'mybook.class.php';
//Создадим объект gbook
$gbook=new mybook();
//Создадим переменную $errMessage со строковым значением ""
$errMessage="";
//проверим была ли отправлена HTML-форма
//Если ДА, то подключите файл с кодом для обработки HTML-формы
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require "saveletter.inc.php";
}
//Проверяем был ли запрос методом GET на удаление записи
// Если ДА, то подключаем файл с кодом для удаления записи
if(isset($_GET['del'])){
    require 'deleteletter.inc.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>пример гостевой книги php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="style.css">
        <script src="print.min.js"></script>
    </head>
    <body>
        <section id="content" class="container">
            		
                    <?php
                        require 'showletter.inc.php';
                    ?>
                  <hr>
                   <?php
                    //Проверим, не является ли переменная $errMessage пустой строкой
                    //Если НЕТ, то выведите значение переменной $errMessage
                    if($errMessage){
                            echo "<p>".$errMessage;
                    }   
                    ?>
		  <form id="form1" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
             <br>
          <div class="grid">
			<div>Ваше имя: </div><div><input type="text" name="gname"></div><div></div>
            <div>Ваш отзыв:</div><div><textarea name="letter" cols="40" rows="6"></textarea></div><div></div>
			<div></div><input type="submit" name="Submit" value="Оставить отзыв"></div><div></div>
		  </div>

		  </form>
                  
</section>
    </body>
</html>

