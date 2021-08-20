<template>
    <div class="container py-10">
        <div class="grid grid-cols-3 gap-8">
            <div v-for="image in repeatable.image" :key="image.id">
                <LitImage
                    :image="image"
                    class="w-full h-full object-cover rounded-lg"
                />
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, onMounted, ref } from 'vue';
export default defineComponent({
    props: {
        repeatable: {
            type: Object,
        },
    },
    setup(props) {
        //
    },
});
</script>
