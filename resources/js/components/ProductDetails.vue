<template>
    <div class="flex flex-wrap py-8 md:py-16">
        <div class="w-full lg:w-3/5 block">
            <div class="flex items-center justify-between">
                <p class="inline-flex text-xs sm:text-base items-center text-gray-850 font-raleway">
                    <svg width="14" height="13" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 h-3 md:h-4 ">
                        <path d="M3 5.54545V7.81818H11V5.54545C11 2.13636 9.29167 1 7 1C4.70833 1 3 2.13636 3 5.54545Z" stroke="#0547A0" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M0 9C0 7.89543 0.895431 7 2 7H12C13.1046 7 14 7.89543 14 9V18C14 19.1046 13.1046 20 12 20H2C0.89543 20 0 19.1046 0 18V9Z" fill="#0547A0"/>
                    </svg>
                    Secure Checkout
                </p>
                <p class="capitalize text-xs sm:text-base leading-tight font-raleway text-gray-850">
                    ships in 5-7 business days
                </p>

            </div>
            <div class="sticky top-0">
                <product-component
                    :title="productInformation.title"
                    :product-image="getSelectedProductImage"
                ></product-component>
            </div>

            <div>
                <tags-component></tags-component>
            </div>
        </div>
        <div class="w-full lg:w-2/5 lg:pl-8 flex flex-col">
            <div class="">
                <h2 class="font-bungee text-blue-550 text-4xl leading-10 mb-2 uppercase">{{ productInformation.title }}</h2>
                <p class="font-raleway text-gray-950">
                    {{ productInformation.description }}
                </p>
            </div>

            <div class="order-4 mt-5">
                <details-component
                    :title="productInformation.title"
                    :description="productInformation.description"
                    :price="productInformation.price"
                    :image="getSelectedProductImage"
                    :choice-id="getSelectedFabricChoice"
                ></details-component>
            </div>
            <div class="order-3 lg:order-4 border border-2 border-white mb-10"></div>

            <div class="order-2 lg:order-last mt-5">
                <fabrics-component
                    :active-choice-id="productInformation.activeChoiceId"
                    :fabric-choices="productInformation.fabricChoices"
                    @update-product-image="(name)=> updateProductImage(name)"
                    @choice-updated="(selectedChoiceId)=> updateFabricChoice(selectedChoiceId)"
                    @update-active-choice="(selectedChoiceId)=> updateActiveChoice(selectedChoiceId)"
                ></fabrics-component>
            </div>



        </div>
    </div>
</template>

<script>
import ProductComponent from "./ProductComponent";
import TagsComponent from "./TagsComponent";
import DetailsComponent from "./DetailsComponent";
import FabricsComponent from "./FabricsComponent";
export default {
    name: "ProductDetails",
    components: {ProductComponent, TagsComponent, FabricsComponent, DetailsComponent},
    props:{
        title: String,
        description:String,
        product: String
    },
    mounted() {
        let activeFabric = this.productInformation.fabricChoices.find((choice) => choice.id === this.productInformation.activeChoiceId)
        this.selectedProductImage = activeFabric.image;

    },
    computed: {
        productInformation() {
            return JSON.parse(this.product)
        },
        getSelectedProductImage() {
            return this.selectedProductImage;
        },
        getSelectedFabricChoice() {
            return this.selectedFabricChoice;
        }
    },
    data() {
        return {
            selectedProductImage: null
        }
    },
    methods: {
        updateProductImage(image) {
            this.selectedProductImage = image;
        },
        updateActiveChoice(selectedChoiceId) {
            this.selectedFabricChoice = selectedChoiceId;
        },
        updateFabricChoice(selectedChoiceId) {
            this.productInformation.activeChoiceId = selectedChoiceId;
        },
    },
}
</script>

<style scoped>

</style>
