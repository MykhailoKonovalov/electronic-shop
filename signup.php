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
                    <form class="signup-form text-light col-8">
                        <h3 class="text-light text-center">Реєстрація на сайті</h3>
                        <div class="form-outline mb-4 ">
                            <input type="name" id="name" class="form-control" />
                            <label class="form-label" for="name">Ім'я</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="phone" id="phone" class="form-control" />
                            <label class="form-label" for="phone">Номер телефону</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" />
                            <label class="form-label" for="email">Email</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="form-control" />
                            <label class="form-label" for="password">Пароль</label>
                        </div>
                        <div class="form-check mb-4">
                            <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="consent-check"
                                    checked
                            />
                            <label class="form-check-label" for="consent-check">Я погоджуюсь з вашими правилами</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-4 col-4">Зареєструватися</button>
                    </form>
                </div>
    </main>
    <?php require_once "footer.php"; ?>
</div>
</body>
</html>