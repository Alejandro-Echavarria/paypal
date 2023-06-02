<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Containers/Container.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>

<template>
    <AppLayout title="Plans">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Plans
            </h2>
        </template>

        <Container>
            <PrimaryButton>
                Subscribe
            </PrimaryButton>
            <pre>
                {{ $page.props }}
            </pre>
        </Container>
    </AppLayout>
</template>

<style scope></style>