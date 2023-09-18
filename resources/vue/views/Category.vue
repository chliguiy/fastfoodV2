<template>

    <div class="lg:col-span-1">
    <nav>
        <div class="flex justify-between mb-6 px-2 md:mb-16">
            <h1 class="font-bold uppercase">
                <a href="index.html" class="text-xl"><i class="fas fa-burger-soda"></i>Fast <span
                        class="text-red-700">Food</span></a>
            </h1>
            <div class="px-4 cursor-pointer lg:hidden" id="open-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <ul class="hidden lg:block" id="menu">
            <li class="my-3" v-for="(category, key) in categories">
                <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold block"
                    :class="[key === selected ? 'bg-custom-yellow block' : '']"  @click="changeCategories(category, key)" >
                    <i class="fas mr-2" :class="[category.icon]"></i>
                    <span>{{ category.name }}</span>
                </a>
            </li>
            <div class="mt-16">
                <li class="my-3">
                    <a class="rounded-lg py-2 px-3 text-md tracking-wider font-bold">
                        <i class="fas fa-redo-alt mr-2"></i>
                        <span>Annuler commande</span>
                    </a>
                </li>
            </div>
        </ul>
    </nav>
    </div>
</template>
<script setup>
import { ref } from 'vue';

const  selected = ref(0);
defineProps(['categories']);

const emit = defineEmits(['update:category']);
const changeCategories = (category, key)=>{
    selected.value = key;
    emit('update:category',category);
}
</script>
<style>
.bg-custom-yellow {
    background-color: #febc2e;
}
</style>
