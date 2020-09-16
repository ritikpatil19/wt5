
    
    <?php 
        if (isset($_POST['submit']))

        {
            require 'db.php';
            if ($_POST['fname']==null or $_POST['lname']==null or $_POST['address']==null or $_POST['email']==null or $_POST['contact']==null or $_POST['comm']==null)
            {
                echo  "No Data";
                echo "<script type='text/javascript'>alert('something is missing')</script>";
            }
            else
            {
                
                $sql="INSERT INTO feedback(fname,lname,address,email,contact,comment)VALUES('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["address"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["comm"]."')";
                $res=mysqli_query($conn,$sql);
                header('Location:display.php');

    
            }
        }
    ?>  
<!DOCTYPE> 
<html> 
<head> 
    <title>Feedbck</title> 
    

    <style> 
        .mySlides {display:none;}
        .header {   
            border: 6px solid #FFFF00;
            width: 100%;
            height: 120px;
        }
        .header img{
            width:10%;
            padding: 10px;
            margin-left: 4%;
            margin-top: 5px;

        }
        .header h1{
            float: right;
            margin-right: 30%;
            font-size: 40px;
            font-style: italic;
            padding:1px;
            text-transform: uppercase;
            color: red;
            margin-top: 2%;

        }
        body { 
            margin: 0 auto; 
            background-position:center; 
            background-size: contain; 
        } 
      
        .menu {    
            /*position: sticky;
            top: 0; */
            background-color: #6B70F2; 
            padding:10px 0px 10px 0px; 
            color:white; 
            margin-top:2px; 
            overflow: hidden; 
            height: 20%;
            width: 100%;
        } 
        .menu a { 
            float: right; 
            color: black; 
            text-align: center; 
            padding: 10px 10px; 
            text-decoration: none; 
            font-size: 20px; 
        } 
        .menu  a:hover{
            background-color: black;
            color: white;
        }

        .menu  a:hover:not(.active) {
            background-color: #111;
        }
        .active {
            background-color: white;
            color: black;
        }
        .menu a{
            padding: 10px 14px;
        }
        .footer { 
            width: 100%; 
            bottom: 0px; 
            background-color: black; 
            color: white; 
            float: left;
            padding-top:10px; 
            padding-bottom:0px; 
            text-align:center; 
            font-size:10px; 
            font-weight:bold; 
            margin-top: 0%;
        } 
        
        .lc img{
            float: right;
            padding-left: 4px;
            padding-top: 2px
            margin-left: 1px;
            margin-top: 5px;
            padding-right: 4px;
            padding-bottom: 4px;
           
        }
       .rc h1{
        float:left;
        align-content: center;
       }
       .intro{
        
       }
       .f1{
        font-weight: bold;
        font-size: 40px;
        text-align: center;
       }
       .lc{
       
         background-color: lightgrey;
 border: 10px solid black;
  padding: 50px;
  margin: 20px;
  text-align: center;
       }
       .f{
        font-size: 60px;
        font-weight: bold;
        text-align: center;
       }
       .body_c{
        background-color: lightgrey;
  border: 5px solid black;
  padding: 50px;
  margin: 20px;
  font-weight: bold;
  font-size: 20px;
       }
    </style> 
</head> 
  
<body> 
      
    
    <div class = "body_c"> 
        

        <center>
        <table  border="0">
            <form method="POST" action="#" enctype="multipart/form-data">
            <tr class="head">
                <td colspan="2"><marquee><h1 style="color:blue;">FEEDBACK FORM</h1></marquee><br></td>
            </tr>
            <tr>
                <td><b>First Name :<br><br></b></td>
                <td><input type="text" name="fname" ><br><br></td>
            </tr>
            <tr>
                <td><b>Last Name :<br><br></b></td>
                <td><input type="text" name="lname" ><br><br></td>
            </tr>
            
            <tr>
                <td><b>Address :<br><br></b></td>
                <td><textarea name="address" ></textarea><br><br></td>
            </tr>
            <tr>
                <td><b>Email :<br><br></b></td>
                <td><input type="text" name="email" ><br><br></td>
            </tr>
            <tr>
                <td><b>Contact Number :<br><br></b></td>
                <td><input type="text" name="contact" ><br><br></td>
            </tr>
                        
            <tr>
                <td><b>comment :<br><br></b></td>
                <td><textarea name="comm" style="width:250px;height:100;" ></textarea><br><br></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset"></center></td>
            </tr>
            </form>
        </table>
        </center>
                


                
                
               
        
        
    </div> 
</body> 
</html>                     











 
                
                
                
               
                
                
               
               
                
                
                
                
               
                
                
                
                
               
                
                
                
                
                        
                        
                
                
                
                
                
                
                
                
            
        