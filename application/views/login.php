<!DOCTYPE html>
<html lang="en" class="h-100">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Login</title>
        <link href="<?php echo css_loader('style2.css');  ?>" rel="stylesheet">
        
    </head>
    <body>
         <body class="h-100">
        <div class="authincation h-100">
            <div class="container-fluid h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-4">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <h4 class="text-center mb-4">Login</h4>
                                        <form action="<?php echo base_url('login/testlogin') ?>" method="post">
                                            <?php if(isset($error)){ ?>
                                                <div class="col d-flex justify-content-center">
                                                <label><strong style=" color:red"><?php echo $error ?></strong></label>
                                                </div>
                                            <?php } ?>
                                            <div class="form-group">
                                                <label><strong>UserName</strong></label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label><strong>Password</strong></label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="${pageContext.request.contextPath}/assets/js/global.min.js"></script>
        <script src="${pageContext.request.contextPath}/assets/js/quixnav-init.js"></script>
        <script src="${pageContext.request.contextPath}/assets/js/custom.min.js"></script>

    </body>
    </body>
</html>