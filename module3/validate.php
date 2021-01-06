<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function formValidate(){
            var a = document.forms["Form"]["firstname"].value;
            if(a==""){
            alert("Name field cannot be empty");
            return false;
            }
        }
    </script>
</head>
<body>
    <form name="Form" action="/module4/validate.php" onsubmit="return formValidate()" method="POST">
        Name: <input type="text" name="firstname">
        <input type="submit" value="submit">
    </form>
</body>
</html>