<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $result = $_POST["prt"];
  //  if(isset($_POST["res"])){
//if($result){
  //  $gbook->choiceLetter($result);
   ?>
    <script type="text/JavaScript"> 
      //window.print();
       // var mywindow = 
       window.open('', 'PRINT', 'height=400,width=600');

        document.write('<html><head><title>' + 'gfgf' + '</title>');
        document.write('</head><body >');
       document.write('<h1>' + <?php $result ?>  + '</h1>');
       // mywindow.document.write('fgdfgfgfg');//document.getElementById($result).innerHTML);
      document.write('</body></html>');
    
  //      mywindow.
  document.close(); // necessary for IE >= 10
    //    mywindow.
    focus(); // necessary for IE >= 10*/
    
      //  mywindow.print();
      //  mywindow.close();
        window.print();
       // return true;
        </script>'
   <?php 
   
  return;
   }
    