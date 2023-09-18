<script setup>
import { ref } from 'vue';
import Aside from './../components/Aside.vue';

const ingerediants = ref({});
const myForm = ref();
const props = defineProps(['menus', 'selectedCategory']);

const isClicked = ref(false);
const togglePanel = (item) => {
    ingerediants.value = item;
    isClicked.value = !isClicked.value;
}
const onSubmit = (event) => {
    console.log(event);
};
</script>
<template>
    <main class="lg:col-span-4  rounded-xl space-y-2 p-4 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
        <div class="flex justify-center md:justify-end">
            <a class="rounded-full bg-gray-200 py-2 px-6 mr-auto"><i
                    class="fas fa-long-arrow-alt-left"></i></a>
            <button class="font-bold rounded-full bg-white mr-2 py-2 px-3 shadow sm:block hidden cart"><i
                    class="fas fa-shopping-basket"></i> 8
                items - 42,00 €</button>
        </div>
        <button class="font-bold rounded-full bg-white mr-2 py-2 px-3 shadow block sm:hidden mt-5 w-full cart"><i
                class="fas fa-shopping-basket mr-3"></i> 8
            items - 42,00 €</button>
        <div class="mt-16">
            <div><span class="font-bold text-2xl md:text-4xl"> {{ selectedCategory.name }}</span><img :src="selectedCategory.photo"
                    class="h-6 w-6 md:h-8 md:w-8 mb-3 ml-2 md:ml-5 inline-flex"></div>

            <div class="mt-5 grid lg:grid-cols-3 sm:grid-cols-2 gap-16">

                <template v-for="(menu, key) in menus" :key="'index-'+key">
                    <div v-for="(item ,index) in menu.products"
                        class="bg-white rounded-lg shadow-md p-3 hover:shadow-lg item transform hover:scale-90 transition duration-300"
                        v-on:click="togglePanel(item.ingerediants)">
                        <img :src="item.images[0].image" :alt="item.name" class="object-cover w-full">
                        <div class="m-3 text-center">
                            <span class="font-bold text-xl">{{ item.name }}</span>
                            <span class="block text-gray-600 text-sm">{{ item.description }}</span>
                            <span class="block text-custom-yellow mt-10 font-bold text-3xl">{{ (Math.round(item.price *
                                100) / 100).toFixed(2) }} €</span>
                        </div>
                    </div>
                </template>
            </div>

        </div>


    </main>
    <Aside v-if="isClicked">
        <template #aside>
            <button class="bg-gray-200 py-2 px-6 rounded-full" id="close-side-panel" v-on:click="togglePanel()"><i
                    class="fas fa-times"></i></button>
            <main class="text-center">
                <template v-for="(item,key) in ingerediants" :key="'index'+key">

                    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">{{ item.name_type_ingrediant }} {{ item.min_ingrediant===1 ? '*':'' }}</h3>
                    <ul
                        class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600"
                         v-for="(value,key) in item.items" :key="'index'+key">
                            <div class="flex items-center pl-3">
                                <input id="list-radio-license" :type="item.max_ingredient >= 2 ? 'checkbox' :'radio' " v-model="value.checked" :value="'list-'+key" :name="'list-'+item.id"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label :for="'list-'+key"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    {{ value.name }}
                                </label>
                            </div>
                        </li>
                    </ul>
                </template>

                <button class="rounded-lg bg-custom-yellow px-4 py-2 font-bold mt-6"  @click="onSubmit(ingerediants)" >Add to Order</button>

            </main>
        </template>
    </Aside>
</template>
<style>
.text-custom-yellow {
    color: #febc2e;
}</style>
