<template>
    <div class="">
        <div>
            <div class="flex flex-wrap justify-around text-center">
                <div class="space-y-2 text-center">
                    <p class="capitalize text-base leading-5 text-gray-950">pay now</p>
                    <p class="text-3xl leading-5 font-roboto font-bold text-red">${{ price.discount }}</p>
                    <p class="leading-none text-sm line-through text-gray-950">${{ price.actual }}</p>
                    <p class="leading-none text-sm text-gray-950">$200 OFF with code</p>
                </div>
                <div class="block border h-24 border-2 border-white"></div>
                <div class="space-y-2 text-center">
                    <p class="text-base leading-5 text-gray-950">Pay as low as</p>
                    <p class="text-4xl leading-5 font-roboto font-bold text-red">$ {{ price.monthly }}
                        <span class="text-sm">/month</span> </p>
                    <p class="leading-none text-sm text-gray-950">with Klarna</p>
                    <p class="underline leading-none text-sm text-gray-950">Learn More</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-8 mb-2">
                <button href="#" class="header font-bungee flex items-center justify-center uppercase bg-blue-450 px-8 py-3 w-full rounded-md border-transparent text-white font-medium ">
                    Add to cart
                </button>
            </div>
        </div>
        <div class="flex flex-grow text-center justify-center mb-10">
            <h2 class="uppercase text-sm font-bungee text-gray-950 border-b-4 border-blue-450 cursor-pointer"> Save design for later</h2>
        </div>


    </div>
</template>

<script>
export default {
    name: "DetailsComponent",
    props: {
        price: Object
    },

}
</script>

<style scoped>

</style>
