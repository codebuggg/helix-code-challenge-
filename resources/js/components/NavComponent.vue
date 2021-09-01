<template>

<div>
    <nav class="flex items-center justify-between">
        <div class="hidden lg:block">
            <div>
                <a href="#" class="uppercase leading-5 block mt-4 mr-4
               lg:inline-block lg:mt-0 border-solid border-b-4
               border-transparent hover:border-blue-450 cursor-pointer
               border-solid border-b-4 border-blue-450 font-bungee text-gray-850">The Sofa</a>
                <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block font-bungee text-gray-850 ">Reviews</a>
                <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block font-bungee text-gray-850">About Us</a>
            </div>

        </div>
        <div class="lg:w-auto w-2/3">
            <img src="https://helixsleep-code-challenge.s3.amazonaws.com/logo.svg" alt="all-day-logo">
        </div>
        <div class="hidden lg:block">
            <div>
                <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block font-bungee text-gray-850">Showroom</a>
                <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block font-bungee text-gray-850">Swatches</a>

            </div>
        </div>

        <!-- mobile navigation -->
        <button type="button" class="lg:hidden block border-solid border-2 border-transparent hover:border-blue-400" @click="isOpen = !isOpen" >
            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
            </svg>
        </button>

    </nav>
    <div :class="isOpen ? 'block' : 'hidden'" class="px-2 pb-4 text-center">
        <NavLink title="The Sofa" class="border-solid border-b-4 border-blue-450"/>
        <NavLink title="Reviews"/>
        <NavLink title="About Us"/>
        <NavLink title="Showroom"/>
        <NavLink title="Swatches"/>
    </div>
</div>




</template>

<script>
import NavLink from "./NavLink";

    export default {
        name: 'Nav',
        components: {
            NavLink
        },
        data() {
            return {
                isOpen: false,
            }
        }
    }
</script>
