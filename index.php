<?php
$con=mysql_connect('localhost','root','');

$db=mysql_select_db('first',$con);
if(mysql_error())
{
    die(mysql_error());
}



if(isset($_POST['btnsub']))
{

    $n=$_POST['name'];
    $p=$_POST['phone'];
    $a=$_POST['address'];
    $e=$_POST['email'];
    $file=$_FILES['cv']['name'];
    $file_loc=$_FILES['cv']['tmp_name'];
    move_uploaded_file($file_loc,"CV/$file");

    if($_FILES['cv']['size']  > 5000000 )
    {
       echo "<script>alert('File to Large')</script>";
    }
    else
    {
      $query=mysql_query("INSERT INTO inquiry values('','$n','$p','$a','$e','$file')");
      if($query){
           echo "<script> alert('Form Submitted')</script>";
      }
      else{
           die(mysql_error());
      }
    }
}
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>
            Registration Form
        </title>
        <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <style>
     body {
    margin: 0;
    min-height: 100vh;
    background:
      linear-gradient(45deg, hsla(340, 100%, 55%, 1) 0%, hsla(340, 100%, 55%, 0) 70%),
      linear-gradient(135deg, hsla(225, 95%, 50%, 1) 10%, hsla(225, 95%, 50%, 0) 80%),
      linear-gradient(225deg, hsla(140, 90%, 50%, 1) 10%, hsla(140, 90%, 50%, 0) 80%),
      linear-gradient(315deg, hsla(35, 95%, 55%, 1) 100%, hsla(35, 95%, 55%, 0) 70%);
  }

    
    </style>
    </head>
    <body>
            <div id="conatainer text-center">  
                    <div class="col-md-4 col-md-offset-5">           
                              <h1>Tag 8</h1>
                    </div>
              </div> 
           
              <div class="container" >                 
                    <div class="col-md-4 col-md-offset-4">
                        <h3> Contact Form  </h3>
                        <form class="form-horizontal" method="post"   enctype='multipart/form-data' >
                            <div class="form-group">           
                                    <label class="control-label col-md-2" for="name">Name</label>
                                    <input type="text" class="form-control" name="name" pattern="[A-Za-z\s]{1,32}" placeholder="Enter Name" required>                              
                            </div>
                            <div class="form-group">           
                                    <label class="control-label col-md-2" for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" pattern="[789][0-9]{9}" placeholder="Enter Contact Number" required>                              
                            </div>
                           
                            <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea class="form-control" name="address" id="Add"  rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="email"  placeholder="Enter Your Email-ID" required>
                            </div>

                            <div class="form-group">
                                <label for="CV">Upload Your CV</label>
                                <input type="file"    class="form-control" name="cv"    accept=".pdf,.doc"    required />
                            </div>
                            <div class="form-group">
                                    <input type="reset" name="btnres" class="btn btn-primary"/>                             
                                    <input type="submit" name="btnsub" class="btn btn-success"/>   
                            </div>
                           
                        </form>

                    </div>
                             
                      
                    


                  
              </div>
           
               <script src="js/bootstrap.min.js"></script>
           

    



    </body>
    </html>