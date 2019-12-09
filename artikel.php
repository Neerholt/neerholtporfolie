<?php 
include 'databaseconn.php';
 $id = $_GET['id'];
?>
<html>
    <head>
        <title>Portfolie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainHeaderContaioner"><!--Straten på mit div kasse for min mainheader og min nav-->
                    <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1><?php
                
                     $sql_tabel = "select * from opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo $row['overskrift'];
                         }  
                     }  
                     
                     ?>
                    </h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="index.php">Forside</a></li>
                    <li><a href="pro.php">Projekter</a></li>
                    <li><a href="kon.php">Kontakt</a></li>
                    <li class="selected"><a href="#Nothing">Læse mere...</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Facebook</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Linkedin</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Praktikpladsen</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
               
            </div><!--slutning på mit div kasse for min mainheader og min nav-->
            <div id="mainformlase"><!--Starten på min mainform, søge ord mainform Mainform-->
              
                <div id="billedelase"><!--Starte på min div billedelase-->
                    
               
                     <?php
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                            echo "<img src='images/".$row['billede2']."' height='100%' width='100%'>";
                            echo "<a href='pro.php'><button class='tilbagelinkknapcss'>&#8617; Tilbage</button></a>"; 
                         }  
                     }
                     
                     ?>
                </div><!--sluting på min div billedelase-->
                
                <div id="overskriftpirnt">
                   <?php
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo "<center><h1>".$row['overskrift']."</h1></center>";
                         }  
                     }  
                     
                     ?>
                </div>
                
                <div id="artikelselv">
                     <?php
                     
                     
                     
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo $row['artikeltext'];
                         }  
                     }  
                     
                     ?>
                    
                </div>
                
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
           <!-- <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
             <footer style="float:right">Website made by Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>

                     
