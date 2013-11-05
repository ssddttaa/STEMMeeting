<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    require "WebConstants.php";
    if(isset($_GET['submitButton'])&&$_GET['inputSchool']!=null&&$_GET['inputSchool']!=""&&$_GET['inputSchool']!=" ")
    {
        $constantsPHP = new WebConstants();
        $con=mysqli_connect($constantsPHP->host,$constantsPHP->username,$constantsPHP->password,$constantsPHP->DBName);
        
        if(mysqli_connect_errno($con))
        {
            echo mysqli_connect_error();
        }
        else
        {
            $results = mysqli_query($con, "SELECT ID FROM SchoolCodes WHERE SchoolCode ='".$_GET['inputSchool']."'");
            $schoolID = "";
            while($row = mysqli_fetch_array($results))
            {
                if($row['ID']!=""&&$row['ID']!=null)
                {
                    $schoolID = $row['ID'];
                }
            }
            if($schoolID != null && $schoolID!="")
            {
                $_SESSION['schoolID'] = $schoolID;
                echo "SUCCESS";
            }
            else
            {
                echo "FAILURE";
            }
        }
    }
?>
