<?php
/**
 * @var $data
 */
?>
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
                        <img class="d-block w-100" src="../../public/images/iphone.jpeg" alt="ProductPhoto1"/>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../public/images/iphone.jpeg" alt="ProductPhoto2"/>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../public/images/iphone.jpeg" alt="ProductPhoto3"/>
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
                            <h3 class="text-center"><?= $data->title ?></h3>
                            <p>Рік: <?= $data->year ?></p>
                            <p>Ціна: <?= $data->price ?></p>
                            <p>Кількість: <?= $data->quantity ?></p>
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
            <?= $data->description ?>
        </p>
    </div>
</main>