<template>
    <div>
        <button @click="abc">estamos no index da pasta</button>
        </div>
</template>
<script>
import { Head, Link } from '@inertiajs/vue3';

export default {
    methods:{
        abc(){
            axios.post('/test', {abc: 'hi'})
            .then(el => {
                console.log('funfo', el)
            })
            .catch(er => {
                console.log('error', er)
            })
        },
    }
}

</script>
