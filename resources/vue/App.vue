<template>
  <div class="pt-16 px-10 grid lg:grid-cols-5 pb-20">
    <div class="md:flex bg-white rounded-xl space-y-2 p-4 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
      <Category :categories="categories" @update:category="changeCategory"></Category>
    </div>

      <Product :menus="menus_category" :selectedCategory="selectedCategory"></Product>
  </div>
</template>
<script setup>
import { onBeforeMount, ref } from 'vue';
import Category from './views/Category.vue'
import Product from './views/Product.vue'

const menus_category = ref([]);
const categories = ref([]);
const selectedCategory = ref({});
const menus = [
    {
        "id_menu": "1",
        "name_menu": "kabab_berliner_frites",
        "category_id": "1",
        "products": [
            {
                "produit_id": "1",
                "name": "kebab_berliner",
                "ingerediants": [{
                        "id": "1",
                        "name_type_ingrediant": "sauce",
                        "max_ingredient": 2,
                        "min_ingrediant": 0,
                        "prodcut_id": 1,
                        "items": [
                            {
                                "id_ingeredient": 10,
                                "name": "Sauce Vert",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            },
                            {
                                "id_ingeredient": 11,
                                "name": "Sauce Vert",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            }
                        ]
                    },
                    {
                        "id": "2",
                        "name_type_ingrediant": "Boissons",
                        "max_ingredient": 1,
                        "min_ingrediant": 1,
                        "prodcut_id": 1,
                        "items": [
                            {
                                "id_ingeredient": 9,
                                "name": "CocaCola",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            },
                            {
                                "id_ingeredient": 8,
                                "name": "Fanta",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            }
                        ]
                    }]
                ,
                price: 13.00,
                price_delivery: 19.00,
                status: true,
                onDisplay: true,
                description: 'Pizza formages',
                images: [{ image: '/pictures/hero-crepe.png', priority: 1, status: true }]
            }]
    },
    {
        "id_menu": "1",
        "name_menu": "kabab_berliner_frites",
        "category_id": "2",
        "products": [
            {
                "produit_id": "2",
                "name": "Pizza hut",
                "ingerediants": [{
                        "id": "1",
                        "name_type_ingrediant": "sauce",
                        "max_ingredient": 2,
                        "min_ingrediant": 0,
                        "prodcut_id": 1,
                        "items": [
                            {
                                "id_ingeredient": 10,
                                "name": "Sauce Vert",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            },
                            {
                                "id_ingeredient": 11,
                                "name": "Sauce Vert",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            }
                        ]
                    },
                    {
                        "id": "2",
                        "name_type_ingrediant": "Boissons",
                        "max_ingredient": 1,
                        "min_ingrediant": 1,
                        "prodcut_id": 1,
                        "items": [
                            {
                                "id_ingeredient": 9,
                                "name": "CocaCola",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            },
                            {
                                "id_ingeredient": 8,
                                "name": "Fanta",
                                "price": 0.00,
                                "excedingPrice": 0.00,
                                "checked": false
                            }
                        ]
                    }]
                ,
                price: 13.00,
                price_delivery: 19.00,
                status: true,
                onDisplay: true,
                description: 'Pizza formages',
                images: [{ image: '/pictures/hero-crepe.png', priority: 1, status: true }]
            }]
    }
];

onBeforeMount(()=>{
categories.value = [{ id: 1, name: 'Kebab', status: true, onDisplay: true, description: 'Kebab ', photo: '/pictures/pizza.gif', icon: 'fa-pizza-slice' },
{ id: 2, name: 'Burger', status: true, onDisplay: true, description: 'Burger', photo: '', icon: 'fa-burger' },
{ id: 3, name: 'boissons', status: true, onDisplay: true, description: 'boissons', photo: '', icon: 'fa-soda' }];

menus_category.value = menus.filter((value)=> value.category_id == categories.value[0].id );
selectedCategory.value = categories.value[0];
})

const changeCategory = (event) =>{
    selectedCategory.value = event;
    menus_category.value = menus.filter((value )=> value.category_id == event.id)
}
</script>

<style></style>
