<?php 
include 'databaseconn.php';
 $id = $_GET['id'];
?>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Google stylesheet-->
      <title>Neerholt.it</title>
   </head>
   <body>
       <header>
           <nav>
             <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="projects.php">Projects</a></li>
               <li><a href="contact.php">Contact</a></li>
               <li><a href="about.php">About</a></li>
             </ul> 
           </nav>
       </header>
       
       <main>
           <div id="top-containereller">
               <center><h1><?php
                
                     $sql_tabel = "select * from opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo $row['overskrift'];
                         }  
                     }  
                     
                     ?></h1><center>
               <hr>
               <?php
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                            echo "<img src='images/".$row['billede2']."' height='30%' width='100%'>";
                            /*echo "<a href='pro.php'><button class='tilbagelinkknapcss'>&#8617; Tilbage</button></a>"; */
                         }  
                     }
                     
                     ?>
               
               <hr>
               
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
               <hr>
               
               
                <?php
                     
                     
                     
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo "Uploadet den: ".$row['dato'];
                         }  
                     }  
                     
                     ?>
               
               
               
           </div>
       </main>
       

       <footer>
           <div id="footer">
               <nav>
                 <ul>
                   <li><a href="index.php">Twitter</a></li>
                   <li><a href="#">Steam</a></li>
                   <li><a href="#">Facebook</a></li>
                   <li><a href="#">LinkedIn</a></li>
                </ul> 
               </nav>
           </div>
       </footer>
       
   </body>
</html>