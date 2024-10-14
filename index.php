<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="admin/css/login.css" />
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar">
            <img src="admin/images/lplasma.png" style="width:100%; overflow:hidden; margin-top:20px;" />
        </div>
        <div class="form-box">
            <form action="admin/backend/auth.php" method="post">
                <input name="email" type="text" placeholder="username">
                <input type="password" placeholder="password" name="password">
                <button class="btn btn-info btn-block login" name="btnLogin"
                    type="submit">Login</button>
            </form>
        </div>
    </div>

</div>