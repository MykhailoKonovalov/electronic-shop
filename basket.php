<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electronic Shop</title>
    <link rel="stylesheet" href="public/styles/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script src="public/scripts/script.js"></script>
</head>
<body>
<div class="wrapper">
    <?php require_once "header.php"; ?>
    <main>
        <div class="container main-content">
            <div class="basket text-light ">
                <h3 class="display text-light text-center">Кошик</h3>
                <div class="row basket-item">
                    <div class="col-md-3 col-lg-3 col-6">
                        <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                    </div>
                    <div class="col-md-3 col-lg-3 col-6">
                        <p>iPhone 12</p>
                    </div>
                    <div class="col-md-1 col-lg-1 col-2">
                        <button>
                            -
                        </button>
                    </div>
                    <div class="col-md-2 col-lg-2 col-3">
                        <input type="text" value="2">
                    </div>
                    <div class="col-md-1 col-lg-1 col-3">
                        <button>
                            +
                        </button>
                    </div>
                    <div class="col-md-2 col-lg-2 col-3">
                        <p>55 999 грн</p>
                    </div>
            </div>
                <div class="row basket-item">
                    <div class="col-md-3 col-lg-3 col-6">
                        <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                    </div>
                    <div class="col-md-3 col-lg-3 col-6">
                        <p>iPhone 11</p>
                    </div>
                    <div class="col-md-1 col-lg-1 col-2">
                        <button>
                            -
                        </button>
                    </div>
                    <div class="col-md-2 col-lg-2 col-3">
                        <input type="text" value="2">
                    </div>
                    <div class="col-md-1 col-lg-1 col-3">
                        <button>
                            +
                        </button>
                    </div>
                    <div class="col-md-2 col-lg-2 col-3">
                        <p>23 989 грн</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-0 col-md-8 col-lg-8"></div>
                <div class="col text-center">
                    <p>Разом: 78 988 грн</p>
                    <button class="btn btn-success">Оформити покупку</button>
                </div>
            </div>
        </div>
        </div>
    </main>
    <?php require_once "footer.php"; ?>
</div>
</body>
</html>