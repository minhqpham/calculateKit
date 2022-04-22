<!DOCTYPE html>
<html>
        <head>
                <title> Advanced calculator</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <style>
                        body {
                                background-color: #fec5e5;
                                margin: 50px 100px;
                        }
                        .btn {
                                margin: 4px 8px;
                                width: 100px;
                        }

                        b {
                                font-size: 30px;
                                color: white;
                        }

                        .answer {
                                background-color: blue;
                                padding: 10px;
                                margin-top: 20px;
                                margin-bottom: 20px;
                                border-radius: 50px;
                                box-shadow: 20px;
                        }
                </style>
        </head>

        <body>
                <div class='container'>
                        <div class="col-md-12">
                                <div class="row shadow p-3 mb-5 bg-white rounded">
                                        <center><h1>Advanced Calculator</h1></center>
                                        <form method="get">
                                                <center>
                                                        <input type="text" class='form-control' name="num1" placeholder="Enter x"><br>
                                                        <input type="text" class='form-control' name="num2" placeholder="Enter y (optional)"><br>
                                                        <button class='btn btn-warning' type="submit" name="mod">x mod y</button>
                                                        <button class='btn btn-warning' type="submit" name="square-root">sqrt(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="sin">sin(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="sinh">sinh(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="cos">cos(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="cosh">cosh(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="tan">tan(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="tanh">tanh(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="log">log(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="log10">log10(x)</button>
                                                        <button class='btn btn-warning' type="submit" name="exp">e^x</button>
                                                        <button class='btn btn-warning' type="submit" name="pow">x^y</button>
                                                </center>
                                        </form>
                                        <br>
                                        <div class='answer'>
                                                <center>
                                                <?php
                                                if(isset($_REQUEST['mod'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $sub = $num1%$num2;
                                                        echo "<b>Output is : ".$sub."</b>";
                                                }

                                                else if(isset($_REQUEST['square-root'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = sqrt($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['sin'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = sin($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['sinh'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = sinh($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['cos'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = cos($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['cosh'])) {
                                                    $num1 = (float)$_REQUEST['num1'];
                                                    $num2 = (float)$_REQUEST['num2'];
                                                    $out = cosh($num1);
                                                    echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['tan'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = tan($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['tanh'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = tanh($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['log'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = log($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['log10'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = log10($num1);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['exp'])) {
                                                    $num1 = (float)$_REQUEST['num1'];
                                                    $num2 = (float)$_REQUEST['num2'];
                                                    $out = exp($num1);
                                                    echo "<b>Output is : ".$out."</b>";
                                                }

                                                else if(isset($_REQUEST['pow'])) {
                                                        $num1 = (float)$_REQUEST['num1'];
                                                        $num2 = (float)$_REQUEST['num2'];
                                                        $out = pow($num1,$num2);
                                                        echo "<b>Output is : ".$out."</b>";
                                                }
                                                ?>
                                                </center>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="d-grid d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-danger" href="../index.html" role="button">Back to menu</a>
                </div>
        </body>
</html>
