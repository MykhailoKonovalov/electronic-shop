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
        <div class="main-content">
            <div class="row">
                <?php require_once "sidebar.php"; ?>
                <div class="col-sm-12 col-lg-9 col-md-9 card-list">
                    <div class="btn btn-light tab-content text-light sidebar-btn" id="nav-tabContent">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#list-tab"
                                aria-controls="list-tab" aria-expanded="false" aria-label="Toggle navigation">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-menu-button-wide" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13zM14 7H2a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM2 6a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H2z"/>
                                <path fill-rule="evenodd" d="M15 11H1v-1h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-10a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                                <path d="M12.823 2.823l-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0z"/>
                            </svg>
                        </button>
                    </div>
                        <ul class="navbar-nav mr-auto sort-menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Сортування
                                </a>
                                <div class="dropdown-menu bg-dark text-center" aria-labelledby="navbarDropdown">
                                    <a class="nav-link text-light" href="">
                                        За алфавітом</a>
                                    <a class="nav-link text-light" href="">
                                        По даті</a>
                                    <a class="nav-link text-light" href="">
                                        По ціні</a>
                                </div>
                            </li>
                        </ul>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title">iPhone 12</h5>
                                    </a>
                                    <p>Бренд: <a href="#">Apple</a></p>
                                    <p>Категорія: <a href="#">Смартфони</a></p>
                                    <p>Ціна: 27 999 грн</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title">iPhone 12</h5>
                                    </a>
                                    <p>Бренд: <a href="#">Apple</a></p>
                                    <p>Категорія: <a href="#">Смартфони</a></p>
                                    <p>Ціна: 27 999 грн</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title">iPhone 12</h5>
                                    </a>
                                    <p>Бренд: <a href="#">Apple</a></p>
                                    <p>Категорія: <a href="#">Смартфони</a></p>
                                    <p>Ціна: 27 999 грн</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title">iPhone 12</h5>
                                    </a>
                                    <p>Бренд: <a href="#">Apple</a></p>
                                    <p>Категорія: <a href="#">Смартфони</a></p>
                                    <p>Ціна: 27 999 грн</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title">iPhone 12</h5>
                                    </a>
                                    <p>Бренд: <a href="#">Apple</a></p>
                                    <p>Категорія: <a href="#">Смартфони</a></p>
                                    <p>Ціна: 27 999 грн</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="public/images/iphone.jpeg" alt="Назва товару"/>
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title">iPhone 12</h5>
                                    </a>
                                    <p>Бренд: <a href="#">Apple</a></p>
                                    <p>Категорія: <a href="#">Смартфони</a></p>
                                    <p>Ціна: 27 999 грн</p>
                                </div>
                            </div>
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