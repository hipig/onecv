<template>
    <layout-header />
    <main>
        <router-view />
    </main>
    <layout-footer />
</template>

<script lang="ts" setup>
    import LayoutHeader from './partials/header.vue';
    import LayoutFooter from './partials/footer.vue';
</script>
