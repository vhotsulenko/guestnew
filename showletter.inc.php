<?php
//Вызовем метод showLetter, результат сохраним в $allletters
$allletters=$gbook->showLetter();

//Используя цикл, выведите в браузер все сообщения
if(count ($allletters)>0){
    foreach($allletters as $row){
        $id = $row['id'];
        $gname = $row['gname'];
        $letter = $row['letter'];
        @$dt = date("d-m-Y H:i:s", $row['datetime']*1);
    ?>
    <div class="quote">
        <div class="quote-icon">
                <div class="icon-img" style="background-color: #ff3333"></div>
        </div>

        <div class="quote-content">
                <p class="droid"><strong><?php echo $gname ?></strong><span class="data"><?php echo @$dt ?></span><br><?php echo $letter ?></p>
        </div>
         <div>
        <form action="mybook.php" method="POST">
            <input type="hidden" name="res" value = "<?php echo $id ?>" label ="">
            <input type="image" src="close.png" alt="удалить" label ="">
        </form>
        <form action="mybook.php" method="POST">
            <input type="hidden" name="prt" value = "<?php echo $id ?>" label ="">
            <input type="image" src="print.png" alt="печать" label ="">
        </form>
        </div>
        
    </div>
    <div class="clear"></div>
    <?php 
    }    
}
    