<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Login to system
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Font Lobster -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .Lobster {
            font-family: Lobster;
        }
        /*
        .fa {
            padding: 20px;
            font-size: 20px;
            height: auto;
            text-align: center;
            text-decoration: none;
            margin: 3px 3px;
            border-radius: 100%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }
        */
    </style>

</head>

<body>

    <div class="container" style="margin-top: 2%;">
        <div class="jumbotron">

            <!-- Header -->
            <div class="row">
                <div class="col-xs-12">
                    <table>
                        <tr>
                            <td>
                                <div class="rounded">
                                    <img src="" width="100%" alt="image">
                                    <p class="Lobster">Chat</p>
                                </div>
                            </td>
                            <td width="100%">
                                <div>
                                    <h1 style="margin-bottom: 10%;" class="Lobster text-center"><big><strong>Sign in</strong></big></h1>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">

                    <form action="login.take.php" method="post">
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    <label class="Lobster"><h3>Email</h3></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="Lobster"><h3>Password</h3></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="Lobster">
                 <h3><input type="checkbox">  Remember me</h3>
               </label>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div style="margin-top: 2%; float: none; margin-left: auto; margin-right: auto;">
                                        <button type="submit" class="center-block btn btn-primary text-center Lobster btn-lg"><big>Sign in</big></button>
                                    </div>

                                </td>
                            </tr>
                        </table>
                    </form>

                </div>

            </div>

            <!-- //Footer
            <footer class="container-fluid">
                <div class="pull-right">
                    <a href="https://www.fb.com" class="fa fa-facebook" target="_blank"></a>
                </div>
            </footer>
            -->
        </div>
    </div>
</body>

</html>
