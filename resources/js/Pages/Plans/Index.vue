<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Containers/Container.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { ref } from 'vue';

const props = defineProps({
    activeSubscriptions: String
});
</script>

<template>
    <AppLayout title="Plans">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Plans
            </h2>
        </template>

        <Container>
            <template v-if="activeSubscriptions">
                <SecondaryButton>
                    Cancel Subscription
                </SecondaryButton>
            </template>

            <PrimaryButton v-else>
                Subscribe
            </PrimaryButton>
        </Container>
    </AppLayout>
</template>

<style scope></style>