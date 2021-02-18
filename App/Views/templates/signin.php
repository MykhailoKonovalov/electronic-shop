<main>
    <div class="container main-content">
        <form class="signin-form text-light col-8" method="POST" action="/profile">
            <h3 class="text-light text-center">Авторизація на сайті</h3>
            <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" name="email" required/>
                <label class="form-label" for="email">Email</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control" name="password" required/>
                <label class="form-label" for="password">Пароль</label>
            </div>
            <div class="form-check">
                <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="remember-check"
                        checked
                />
                <label class="form-check-label" for="remember-check">Запам'ятати мене</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4 col-4">Увійти</button>
        </form>
    </div>
</main>
