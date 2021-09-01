<template>
    <div class="flex justify-between space-x-2 md:space-x-4 mt-4">
        <div
            @click="selectFabric()"
            class=" w-32 max-w-xs text-center cursor-pointer "
            :class="isActive ? 'border-2 border-blue-450 rounded-t-md rounded-b-lg' : ''">
            <img :src='imgName' :alt="title" class="object-contain">
            <div
                :class="isActive ? 'bg-blue-450 w-full rounded-b' : 'bg-gray-250'">
                <p
                    class="text-sm py-2"
                    :class="isActive ? 'text-white' : ''"
                >
                    {{ title }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "VariationsComponent",
    props: {
        choiceId: Number,
        title: String,
        imgName: String,
        isActive: Boolean
    },
    methods: {
        selectFabric() {
            this.$emit('set-active', this.choiceId)
            this.$emit('change-image', this.imgName)
        }
    },

}
</script>

<style scoped>

</style>
