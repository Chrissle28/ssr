<template>
    <AppHead title="Master" />
    <LitBlock :block="form.content" :repeatables="repeatables" />
    <div class="container py-5">
        <UiButton black square outline>Test ist test</UiButton>
    </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from 'vue';
import repeatables from '../content.block';
export default defineComponent({
    props: {
        form: {
            type: Object,
            required: true,
        },
    },
    setup(props) {
        return {
            repeatables,
        };
    },
});
</script>
