<template>
<div class="container products">
  <h2>Каталог</h2>
  <div class="row">
  <Product
      v-for="products of products"
      v-bind:id="products.id"
      v-bind:key="products.id"
      v-bind:title="products.title"
      v-bind:year="products.year"
      v-bind:quantity="products.quantity"
      v-bind:price="products.price"
  />
</div>
</div>
</template>

<script>
import Product from "./Product.vue";
  export default {
    name: "Catalog",
    components: {
  Product
},
data() {
  return {
    products: [],
  }
},
mounted() {
  fetch('http://my-site.com/api/products')
      .then(response => response.json())
      .then(json=> {
        this.products = json
      })
},
}
</script>

<style scoped>
.products h2{
  color: white;
}
</style>