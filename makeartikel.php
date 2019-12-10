<?php 
include 'databaseconn.php';


if(isset($_POST['GEM'])){
  
$billede = $_FILES['imagess']['name'];
$billede1 = $_FILES['imagesss']['name'];
$overskrift = $_POST ['overskrift'];
$artikeltext = $_POST ['artikeltext'];
$brodtekst = $_POST ['brodtekst'];

$target = 'images/';

 
$connect = mysqli_connect($servername, $username, $password, $databasename);


if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 

$sql_tabel = "INSERT INTO `opret`(`idopret`, `overskrift`, `billede`, `artikeltext`, `dato`, `brodtekst`, `billede2`) VALUES (NULL,'$overskrift','$billede','$artikeltext',NULL,'$brodtekst','$billede1')";

$data = mysqli_query($connect,$sql_tabel);

 move_uploaded_file($_FILES['imagess']['tmp_name'],$target.$billede);
 move_uploaded_file($_FILES['imagesss']['tmp_name'],$target.$billede1);

header("Refresh:0");
//header("location:loggedind.php");

mysqli_close($connect);

}
?>    
<html>
    <head>
        <title>Opret Artikel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainHeaderContaioner"><!--Straten på mit div kasse for min mainheader og min nav-->
                 <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1>Opret Artikel</h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            
               
            </div><!--slutning på mit div kasse for min mainheader og min nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform--> 
                <center><form action="" method="POST" enctype="multipart/form-data">
                        
                        
                        <div id="lavevenster"><!--starten på min side form på lavepost-->
                             <h3>Overskrift</h3>
                                    <input type="text"  class="textboxsopret" name="overskrift" placeholder="Skriv en overskrift" maxlength="20"><br/><br/>
                                    <hr>
                                    <h3>Brødtekst</h3>
                                    <center><textarea rows="3%" class="textboxsopret" name="brodtekst"cols="40%" placeholder="Skrive en brødtekst til din artikel"  maxlength="350" ></textarea></center><br/>
                                    <hr>
                                  <h3>Uploade billeder</h3>
                                  <label>Uploade et brødtekst billede:<br/></label><input type="file" name="imagess" ><br/><br/>
                                  <label>Uploade et artikel billede:<br/></label><input type="file" name="imagesss" ><br/><br/>
                                  <hr>
                        </div><!--sluting på min side form på lavepost-->
                                    <h3>Skriv din artikel her</h4>
                                    <center><textarea rows="22%" name="artikeltext" cols="80%" style="width:50%; height: 80%;" placeholder="Skriv din artikel her."></textarea></center>    
                                    <button class="opretknap" onclick="sendbesked" type="submit" name="GEM">Opret artikel</button>
                                </form></center>  
                        <center><div>
                                    <form method="POST" action="loggedind.php">
                                    <input class="cancelknap" type="submit" name="logut" value="Cancel post">
                                    </form>
                        </div></center>
               
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
           <!-- <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
             <footer style="float:right">Website made by Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>
