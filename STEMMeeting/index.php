<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset='utf-8'/>
		<title>Colorbox Examples</title>
		<link rel="stylesheet" href="colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jquery.colorbox.js"></script>
                <script>
                    $(document).ready(function(){
                        $(".inline").colorbox({inline:true, width:"50%", onload:function(){$('#cboxClose').remove();}});
                        $.colorbox({width:"30%", inline:true, href:"#inline_content"});
                    }); 
                    
                </script>
                
	</head>
	<body>
		<p><a class='inline' href="#inline_content" style ="visibility:hidden;">Inline HTML</a></p>

		<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div id='inline_content' style='padding:10px; background:#fff;'>
                            <table>
                                <tr>
                                    <td> <p style ="font-size:20px;">School Code: </p></td>
                                    <td>
                                         <input type ="text" name ="inputSchool" id="inputSchool">
                                         <input type ="button" name ="submitButton" value ="Enter" onclick ="checkSchoolCode()">
                                    </td>
                                </tr>
                            </table>
			</div>
		</div>
        <script type ="text/javascript">
            function checkSchoolCode()
            {
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        if(xmlhttp.responseText=="SUCCESS")
                        {
                             window.location = "/STEMMeeting/SubPages/HomePage.php";   
                        }
                        else
                        {
                            alert("Sorry, incorrect school password.");
                        }
                    }
                }
                xmlhttp.open("GET","/STEMMeeting/DatabaseActions/CheckSchoolCode.php?submitButton=Enter&inputSchool="+document.getElementById('inputSchool').value,true);
                xmlhttp.send();
            }
        </script>
        
        <?php
            //The ."1" is just becaause I have two cookies that use the encoded school code, one that checks to see that the user has entered the school code before (this one) and the other that actually gives the the school ID
        if($_COOKIE["CRyN7T/p3iDrg1"]=="CRkqXmVz.KgwQ")
            {
                echo "knock knock niggaz";
                echo '<script type = "text/javascript">window.location=\"HomePage.php\";</script>';
            }
        ?>
        
	</body>
        
</html>
