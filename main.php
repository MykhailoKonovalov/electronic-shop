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
        <div class="row">
            <div class="col">
                <div class="container">
                    <blockquote class="blockquote text-center text-light site-description">
                        <h3 class="mb-0">
                            Вітаємо Вас на нашому сайті!
                        </h3>
                        <p>
                            Ми - український онлайн-ритейлер, що швидко розвивається. В нас Bи зможете отримати широкий
                            ассортимент електронної техніки, привабливі акції та високий рівень сервісу. Щоб оформити в
                            нас замовлення, Bам необхідно <a href="#">зареєструватися</a>.
                        </p>
                    </blockquote>
                </div>
            </div>
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide carousel-container" data-ride="carousel">
                    <h1 class="text-light text-center">Цікаві пропозиції</h1>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="public/images/banner1.webp" alt="Sale"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/banner2.webp" alt="Sale"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/banner3.webp" alt="Sale"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/banner4.webp" alt="Sale"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/banner5.webp" alt="Sale"/>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="more-link">
                        <a href="#">Більше акцій</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
    <?php require_once "footer.php"; ?>
</div>
</body>
</html>