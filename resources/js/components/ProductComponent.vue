<template>
    <div class="w-full lg:3/5 block">
        <div class="">
            <img
                class="w-full h-full object-contain" :src='productImage' :alt="title" >
        </div>
    </div>
</template>

<script>
import VariationsComponent from "./VariationsComponent";
export default {
    name: "Product",
    props:{
        productImage: String,
        title: String
    }
}
</script>

<style scoped>

</style>
