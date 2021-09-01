<template>
    <a href="#nav" class="font-bungee text-base leading-7 block mt-4 mr-4 lg:inline-block lg:mt-0 text-gray-850 border-solid border-b-4 hover:border-blue-450 cursor-pointer">
        {{ title }}
    </a>
</template>

<script>
export default {
    name: "NavLink",
    props: {
        title: String
    }
}
</script>

<style scoped>

</style>
