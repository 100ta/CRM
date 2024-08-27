<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';


const props = defineProps({
    customers:Object
})

onMounted(() => {
    console.log(props.customers)
})

</script>

<template>
</template>