<?php
//Вызовем метод showLetter, результат сохраним в $allletters
$allletters=$gbook->showLetter();
//<script src="print.min.js"></script>
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
        
        <div class="quote-icon2">
        <form class="quo" action="mybook.php" method="POST"> 
           
            <input type="hidden" name="res" value = "<?php echo $id ?>" label ="">
            <input type="image" width=36px src="close.png" alt="удалить" label =""align="right">
            
        </form>
       <input type="image" src="print.png" align="right" width=36px onclick="prt('<?php echo $gname ?>','<?php echo $letter ?>')">
        
       </div>
    </div>
           <div>
            
        
    </div>
        
    
    <div class="clear">
      </div>

     
  <script type="text/JavaScript"> 
     function prt(name, str) {
        JSONdata = [
         {
          Name: name,
          Letter: str
         }
        ]
      printJS({printable: JSONdata, 
      properties: [
		{ field: 'Name', displayName: 'Имя'},
		{ field: 'Letter', displayName: 'отзыв'}
	    ],
        type: 'json',
        /*gridHeaderStyle: 'color: red;  border: 2px solid #3971A5;',*/
	    gridStyle: 'border: none'
        /*2px solid #3971A5;'*/
        })
     }
  </script>
   
    <?php 
    }    
}
    