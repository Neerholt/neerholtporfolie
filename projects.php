<?php include 'databaseconn.php';?>
<html>
   <head>
       <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Google stylesheet-->
      <title>Projects</title>
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
              <?php
                     $sql_tabel = "SELECT * FROM opret order by idopret desc limit 400"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo "<a href=\"artikel.php?id=". $row['idopret'] . "\">"; 
                             echo '<div id="trippel-containertest">';
                             echo "<h2><strong>".$row['overskrift']."</strong></h2>";
                             echo "<img src='images/".$row['billede']."' height='45%' width='100%'>";
                             echo '<div id="trippel-container-kasse-texttest">';
                             echo '<div id="trippel-container-kasse-text-gaptest">';
                             echo $row['brodtekst']."...";
                             echo '</div> ';
                             echo '</div> ';
                             echo '</div> ';
                             echo '</a>';
                         }  
                     }  
                     
                     ?>
       </main>
       
       
       <div id="mellemrum">
           <p></p>
       </div>

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