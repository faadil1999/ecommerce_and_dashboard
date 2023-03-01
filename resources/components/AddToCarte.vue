<script setup>
const productId = defineProps(['productId'])
const addToCart = async () => {
   await axios.get('/sanctum/csrf-cookie');
   await axios.get('/api/user').then( async(res) => {
        let reponse = await axios.post('api/products/',{ productId: productId });
        console.log(reponse);
    })
    .catch(err => console.log(err));
}

</script>

<template>

        <a href="#" @click.prevent = "addToCart">
            <i class="ti-shopping-cart"></i>
         </a>
   
</template>