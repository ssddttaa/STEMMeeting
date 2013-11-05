<?php
    session_start();
?>
<html>
    <head>
        <script src ="../Javascript/MainJS.js"></script>
    </head>
    <body>
        <input type ="hidden" value ="" name ="hiddenTag" id="hiddenTag">
        <?php 
            require "../DatabaseActions/WebConstants.php";
            $WebConstants = new WebConstants();
            echo $_SESSION['schoolID'];
            echo "<script type = \"text/javascript\">document.getElementById('hiddenTag').value=".$_SESSION['schoolID'].";setCookie(\"".$WebConstants->schoolCodeCookie."1\",\"".$WebConstants->encodedTrue."\",500);</script>";  
      
        ?>
        
        
        
    </body>
</html>