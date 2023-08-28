<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" onsubmit="return validateform()">
        <div>signup</div>
        <div>Username: <input type="text" name="un" id="un"></div>
        <div>Password: <input type="Password" name="pw" id="pw" required></div>
        <div>Email1(HTMl5 validation): <input type="email" name="email1" required ></div>
        <div>Email2(JS validation): <input type="text" name="email2" ></div>
        <div> id="emailError"></div>
        <div><input type="submit" value="signup" name="submit"></div>
</form>
<script>
    fucntion validateform(){
        var emailRegex = /[A-Za-z0-9]=@[A-Za-z0-9]=.[A-Za-z]{2,3}/;
        // OR new RegExp("[A-Za-z0-9]=@[A-Za-z0-9]=.[A-Za-z]{2,3}");
        var email2 = document.getElementById("email2").value;
        if(emailRegex.test(email2)){
            return true

        }
        else{
            document.getElementById("emailerror").innerHTML = "Invalid email";
            return false;
        }

    }
</body>
</html>