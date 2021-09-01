<template>
<div class="order-2 lg:order-last mb-10">
    <h2 class="font-bungee text-blue-550 leading-5">1. Choose a fabric</h2>
    <p class="text-base text-gray-850 mb-8">Choose your choice from fabrics to leather</p>
    <div>
        <p class="text-base font-bold text-gray-850 font-raleway ">Fabric Choices</p>
        <div class="flex justify-between space-x-2 md:space-x-4 mt-4">
            <variations-component
                v-for = "choice in fabricChoices"
                v-bind:key="choice.id"
                :choice-id = "choice.id"
                :title="choice.title"
                :img-name="choice.image"
                :is-active="choice.id === activeChoiceId"
                @set-active="(id)=> setActiveChoice(id) "
                @change-image="(name)=> updateImageName(name)"

            />

        </div>
    </div>
</div>
</template>

<script>
import VariationsComponent from "./VariationsComponent";
export default {
    name: "FabricsComponent",
    components: {VariationsComponent},
   props: {
       activeChoiceId: Number,
       fabricChoices: Array,
   },
    methods:
        {
            setActiveChoice(selectedChoiceId) {
                this.$emit('choice-updated', selectedChoiceId)
            },

        updateImageName(selectedImageName){
            this.$emit('update-product-image', selectedImageName)
        }

    },
}
</script>

<style scoped>

</style>
