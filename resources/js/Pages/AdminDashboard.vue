<script setup>
import { Head, Link} from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
</script>

<template>
    <Head title="Admin Dashboard" />
        <AdminLayout>
            <p class="text-4xl mx-4 text-black text-center">WELCOME,  {{ $page.props.auth.user.name }}</p>
        </AdminLayout>
</template>

<script>

export default {
   components: {
      AdminLayout
   }
}

</script>