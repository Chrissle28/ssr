<template>
    <Disclosure>
        <DisclosureButton
            class="
                flex
                bg-gray
                my-0
                rounded-t-sm
                justify-between
                w-full
                px-4
                py-2
                focus:outline-none
                focus:ring
                focus:ring-gray-900
                focus:ring-opacity-75
            "
        >
            <div class="flex w-full justify-between">
                {{ title }}
                <div>arrow</div>
            </div>
        </DisclosureButton>
        <DisclosurePanel class="px-4 rounded-b-sm bg-gray pt-4 pb-2">
            <slot />
        </DisclosurePanel>
    </Disclosure>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
export default defineComponent({
    components: { Disclosure, DisclosureButton, DisclosurePanel },
    props: {
        title: {
            type: Object,
        },
    },
    setup(props) {
        //
    },
});
</script>
