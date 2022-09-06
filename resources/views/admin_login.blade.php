<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="{{asset('public/backend/css/style.css')}}" />
  <style type="text/css">
        * {
            
            margin: 0px;
            padding: 0px;
            font-family: 'Times New Roman', Times, serif;
            box-sizing: border-box;
        }

        main {
            background-color: #dddddd;
            min-height: 300px;
            padding: 250px;
        }

        .login-form {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 50px;
            border: 2px dotted #cccccc;
            border-radius: 15px;
        }

        button {
            width: 100%;
            padding: 7.5px 15px;
            border-radius: 2px;
            background-color: #009999;
            color: #ffffff;
            border: none;
            outline: none;
        }

        .div1 {
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .div1 input {
            padding: 7.5px 15px;
            width: 50%;
            border: 1px solid #cccccc;
            outline: none;
        }

        .btn-box {
            text-align: right;
            margin-top: 25px;
        }

        h1 {
            color: seagreen;
        }

        b {
            color: seagreen;
        }
        span.text-alert{
            color: red;
            font-size: 17px;
            width: 100%;
            text-align: center;
        }

    </style>
  <title>Admin | Room Management System</title>
</head>
<body>
    <main>
        <div class="login-form">
        <h1>Đăng nhập vào trang Website</h1>
        <?php 
             $message = Session::get('message');
             if($message){
                 echo '<span class="text-alert">',$message,'</span>';
                 Session::put('message', null);
             }
        ?>
            <form method="POST" action="{{URL::to('/admin-dashboard')}}" autocomplete="on">
                {{csrf_field()}}
                <div class="div1">
                    <label for="username"><b>Username:</b></label>
                    <input type="text" name="admin_username" id="username" placeholder="Nhập username"><br>
                </div>
                <div class="div1">
                    <label for="password"><b>Password:</b></label>
                    <input type="password" name="admin_password" id="psw" placeholder="Nhập password">
                </div>
                <div class="btn-box">
                    <button type="submit" name="login">Đăng nhập</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>