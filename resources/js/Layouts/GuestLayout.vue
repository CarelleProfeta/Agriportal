<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-no-repeat bg-cover"
         style="background-image: url('https://i.ibb.co/qsqwvhg/background-Login.png')" >
    
  
        <div
            class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white opacity-80 shadow-2xl drop-shadow-2xl overflow-hidden sm:rounded-lg">
            <img
            src="https://agriportal.ph/akin_laman/uploads/2020/03/Agriportal-Logo.png"
            class="pt-3 pb-8"
            alt="..."
            />
            <slot/>
        </div>
    </div>
   
</template>


