<template>
  <div class="container">
    <div class="col-4 col-md-6 col-lg-4">
    <div class="card">
          <a :href="'/catalog/show?id=' + id">
            <h5 class="card-title">{{title}}</h5>
          </a>
          <h6>Ціна: {{(price).toString().slice(0, -2)}},{{(price).toString().slice(-2)}}</h6>
      <h6>Рік виходу: {{year}}</h6>
      <h6>Кількість: {{quantity}}</h6>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Product",
  props: {
    id: {
      type: Number,
      required: true
    },
    title: {
      type: String,
      required:true
    },
    price: {
      type: Number,
      required: true
    },
    year: {
      type: Number,
      required: true
    },
    quantity: {
      type: Number,
      required: true
    }
  }
}
</script>

<style scoped>
</style>