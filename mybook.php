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
    if(isset($_POST["res"])){
       $result = $_POST["res"];
       $result = require 'deleteletter.inc.php'; 
       header("Location: index.php");
    } else if (isset($_POST["prt"])){
        $result = $_POST["prt"];
        $gbook->printLetter($result);
        return;
    } else
    require 'saveletter.inc.php';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>пример гостевой книги php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section id="content" class="container">
            		
                    <?php
                        require 'showletter.inc.php';
                    ?>
                   <h2>Оставить отзыв</h2>
                   <?php
                    //Проверим, не является ли переменная $errMessage пустой строкой
                    //Если НЕТ, то выведите значение переменной $errMessage
                    if($errMessage){
                            echo "<p>".$errMessage;
                    }   
                    ?>
		  <form id="form1" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
			<tbody><tr><td><p>Ваше имя</p></td><td><input type="text" name="gname"></td>
	      	</tr><tr>
		    <td><p>Ваш отзыв</p></td>
			<td>
		      <textarea name="letter" cols="40" rows="4"></textarea></td>
			</tr>
			
			<tr><td> </td><td>
			  <input type="submit" name="Submit" value="Оставить отзыв"></td>
			</tr>
			</tbody></table>
		  </form>
                  
</section>
    </body>
</html>