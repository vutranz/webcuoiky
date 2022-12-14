<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>    
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main {
            /* display center */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

            /* backgroud */
            background-color: #1dd1a1;
        }

        .form-login  {
            background-color: #fff;
            padding: 40px 50px;
            width: 400px;
            border-radius: 2px;
        }

        .form-name {
            font-size: 30px;
            font-weight: bold;
        }

        .form-name::before {
            content: "";
            display: inline-block;
            background-color: #1dd1a1;
            width: 15px;
            height: 28px;
            margin-bottom: -3px;
            margin-right: 10px;
            border-radius: 1px;
        }

        .form-group {
            padding-top: 25px;
        }

        .label {

        }

        input {
            width: 100%;
            margin-top: 10px;
            line-height: 40px;
            padding: 0px 10px;
        }

        #submit {
            width: 100%;
            border: unset;
            padding: 13px;
            background-color: #1dd1a1;
            margin-top: 25px;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
            border-radius: 2px;
        }

        #submit:hover {
            background-color: #34daad;
        }

        #loading-register {
            float: right;
            font-size: 16px;
            margin-top: 20px;
            font-weight: 500;
        }

        #loading-register:hover {
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="main">
        
        <form  action="login.php" method="post" class="form-login">
            <p class="form-name">Đăng nhập</p>
            <!-- ID:
            <input hidden type="text" th:field="*{id}"> <br> -->
            <div class="form-group">
                <label for="username" class="label">Username</label> <br>
                <input type="text"  id="username" name="username"> <br>
            </div>
    
            <div class="form-group">
                <label for="password" class="label">Password</label> <br>
                <input type="password"  id="password" name="password"> <br>
            </div>
    
            <button type="submit" id="submit">Đăng nhập</button>
    
            <a id="loading-register">Register?</a>
        </form>
    </div>

</body>

</html>