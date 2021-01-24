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
                <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="container product-container text-light">
                <div id="carouselExampleIndicators" class="carousel slide carousel-container product-carousel"
                     data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="public/images/iphone.jpeg" alt="ProductPhoto1"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/iphone.jpeg" alt="ProductPhoto2"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="public/images/iphone.jpeg" alt="ProductPhoto3"/>
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
                </div>
            </div>
                </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 text-light product-info">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="text-center">iPhone 12</h3>
                                <p>Бренд: <a href="">Apple</a></p>
                                <p>Категорія: <a href="">Смартфони</a></p>
                                <p>Ціна: 27 999 грн</p>
                                <p>Продано: 349</p>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-outline-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container product-description text-light">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus, lectus vel ultricies pretium,
                dolor est dapibus elit, dictum rutrum risus massa eu erat. Integer feugiat tincidunt metus at malesuada.
                Donec tincidunt tortor quis tellus egestas, ut euismod dolor feugiat. Cras iaculis massa eget finibus
                interdum. Integer iaculis nisi eget nisl pretium auctor. Duis consequat posuere iaculis. Curabitur a
                velit et est porttitor imperdiet. Sed tempor fringilla vestibulum. Duis congue, orci non bibendum
                ultricies, augue dui convallis est, eget iaculis nulla nibh a augue. Aliquam mollis, neque ut tincidunt
                malesuada, nisi erat dignissim mauris, id lacinia lacus risus non augue. Mauris id nibh arcu. Ut et
                purus lobortis, ullamcorper nulla et, iaculis nulla. Duis quis orci libero. Donec lacinia lobortis
                justo, id varius felis pulvinar blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                dictum consequat justo. Nam in orci ornare, aliquam risus tincidunt, venenatis augue. Sed feugiat vitae
                dolor id feugiat. Aenean et ligula risus. Pellentesque blandit pretium ex at ullamcorper. Aenean at arcu
                lorem. Vestibulum vulputate risus justo, quis elementum ante cursus eu. Nulla eleifend lacus in erat
                hendrerit sagittis. Morbi lacinia, tortor at tempus hendrerit, augue est rutrum mi, id pretium quam
                neque id mi. Ut at ullamcorper metus. Ut fringilla quam libero, at commodo mi aliquet et. Vivamus congue
                faucibus nisl, nec facilisis quam interdum condimentum. Orci varius natoque penatibus et magnis dis
                parturient montes, nascetur ridiculus mus. Integer turpis eros, dignissim sed fermentum ac, tristique
                non neque. Vestibulum finibus, eros in sollicitudin rhoncus, ipsum massa pulvinar lorem, non gravida
                justo nisi a nulla. Pellentesque pulvinar tempor nulla, at facilisis lacus bibendum sed. Phasellus lorem
                odio, dapibus at
                pellentesque a, scelerisque et nisl. Suspendisse bibendum purus in porta pellentesque. Proin dapibus
                sagittis fermentum. In hac habitasse platea dictumst. Duis et lacus vel dui viverra fermentum. Mauris a
                dignissim lacus. Donec nec ante ipsum. Maecenas vehicula tristique viverra. Donec eget magna sem. Ut
                quis lectus pellentesque felis lobortis eleifend. Nullam sed gravida dui. Pellentesque quis placerat
                est, aliquam tristique eros. Vivamus vulputate egestas libero, at vestibulum arcu feugiat at.
            </p>
        </div>
    </main>
    <?php require_once "footer.php"; ?>
</div>
</body>
</html>