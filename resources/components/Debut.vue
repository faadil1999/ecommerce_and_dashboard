<script setup>

import { ref , onMounted } from 'vue'
const message = ref("Tranquille")
onMounted(() => {
    console.log("Faadil mounted")
})
</script>

<template>
    <div>
        {{ message }}
        <h1>LE TESTEEE</h1>
    </div>
</template>