function getProducts() {
    fetch('http://my-site.com/api/products')
        .then(response => response.json())
        .then(json=>{
            displayProducts(json)
        })
}

function displayProducts(products) {
    catalog = document.getElementById("catalog-block");
    catalog.innerHTML = '';
    let html = '';
    products.forEach(element => {
        html = '\n' +
            '                    <div class="col-12 col-md-6 col-lg-4">\n' +
            '                        <div class="card">\n' +
            '                            <img src="" alt="' + element.title + '"/>\n' +
            '                            <div class="card-body">\n' +
            '                                <a href="/catalog/show?id=' + element.id + '">\n' +
            '                                    <h5 class="card-title">' + element.title + '</h5>\n' +
            '                                </a>\n' +
            '\n' +
            '                                <p>Ціна: ' + element.price + '</p>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                    </div>'
        catalog.innerHTML += html
    })
}

getProducts()