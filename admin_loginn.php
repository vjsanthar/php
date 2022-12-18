<?php


if($_POST) {
    echo '<pre>';
    print_r($_POST);
    die;
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
<title> Form</title>

<script>
function loginn()
{
    var uname = document.getElementById("id").value;
    var pwd = document.getElementById("pwd").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(uname =='')
    {
        alert("please enter Valid Email id");
        return false;
    }
     else if(pwd=='')
    {
      alert("enter the password");
      return false;
    }
    else if(!filter.test(uname))
    {
        alert("Enter valid email id.");
        return false;
    }
    else if(pwd.length < 6 || pwd.length > 6)
    {
        alert("Password min and max length is 6.");
        return false;
    }
    else
    {
        alert('Thank you for login in');
        
        return true;
    }
}


//Reset Inputfield code.
function clearFunc()
{
 document.getElementById("id").value="vijay@gmail.com";
 document.getElementById("pwd").value="1234";
}
function clearFunc()
{
 document.getElementById("id").value="vijay1@gmail.com";
 document.getElementById("pwd").value="0987";
}
function clearFunc()
{
 document.getElementById("id").value="vijay2@gmail.com";
 document.getElementById("pwd").value="09876";
}

</script>
</head>
<body>
    <!-- Main div code -->
    <div id="main">
    <div class="h-tag">
        <center>
    <h1>USER DETAILS </h1>
</center>
    </div>
    <div id="ap">
    
    </div>
    <!-- Login box -->
    <div class="login">
        <form action = "admin_verify.php" onsubmit = "return loginn()" method = "POST">
            <table cellspacing="2" align="center" cellpadding="8" border="0">
                <tr>
                    <td>Enter Email id :</td>
                    <td>
                        <input type="text" placeholder="Enter Email id here" id="id1" name="id" class="tb" />
                    </td>
                </tr>
                <tr>
                    <td>Enter Password :</td>
                    <td>
                        <input type="password" placeholder="Enter Password here" id="pwd1" name="pwd" class="tb" />
                
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="reset" value="Reset" onclick="clearFunc()"
                        class="btn" />
                        <input type="submit" name="submit" value="Login" class="btn" />
                    </td>
                </tr>
            </table>
        </form>
        </div>
        </div>
        </body>
        </html>

