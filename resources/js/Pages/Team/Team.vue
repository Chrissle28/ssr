<template>
    <AppHead title="Team">
        <meta type="description" content="Inertia Head Demo." />
        <meta name="twitter:title" content="Inertia Head Demo" />
        <meta name="twitter:site" content="@ninjaparade" />
        <meta name="twitter:creator" content="@ninjaparade" />
        <meta name="twitter:description" content="Inertia Head Demo." />
        <meta name="twitter:card" content="summary_large_image" />

        <meta property="og:url" content="http://inertia-head-demo.test" />
        <meta property="og:title" content="Inertia Head Demo" />
        <meta property="og:description" content="Inertia Head Demo" />
        <meta property="og:type" content="website" />
        <meta
            property="og:image"
            content="https://www.biography.com/.image/t_share/MTQ3NTI2OTA4NzY5MjE2MTI4/drake_photo_by_prince_williams_wireimage_getty_479503454.jpg"
        />
    </AppHead>
    <LitBlock :block="form.content" :repeatables="repeatables" />
    <div class="container py-5">
        <UiButton black square outline @click="isOpen = !isOpen">{{
            form.text
        }}</UiButton>
        <UiButton @click="modal2 = !modal2">Modal öffnen</UiButton>
        <UiModal v-model:open="isOpen">
            <template v-slot:title> Modal Titel </template>
            <div class="my-2">Hier könnte ihre Werbung stehen</div>
        </UiModal>
        <UiModal v-model:open="modal2">
            <template v-slot:title> Modal 2 </template>
            <div class="my-2">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat
                nemo quia, perferendis nam ratione excepturi possimus optio
                velit facere vitae architecto repellat, earum repellendus
                perspiciatis sint itaque ex similique! Animi.
            </div>
            <UiButton class="mt-5" outline @click="modal2 = false">
                Abbrechen
            </UiButton>
        </UiModal>
    </div>
</template>

<script lang="ts">
import { defineComponent, PropType, ref } from 'vue';
import repeatables from '../content.block';
export default defineComponent({
    props: {
        form: {
            type: Object,
            required: true,
        },
    },
    setup(props) {
        const isOpen = ref(false);
        const modal2 = ref(false);
        return {
            repeatables,
            isOpen,
            modal2,
        };
    },
});
</script>
