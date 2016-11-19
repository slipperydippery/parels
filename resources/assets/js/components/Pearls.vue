<template>
    <div class="">
        <pearl
            v-for="pearl in pearls"
            :pearl="pearl"
        >
        </pearl>
    </div>

</template>

<script>
    import pearl from '../components/Pearl.vue';

    export default {
    	data() {
    		return {
    			pearls: [],
    		}
    	},

        mounted() {
            console.log('Parels ready.');
            this.getPearls();
        },

		methods: {
        	getPearls: function () {
        	    this.$http.get('/api/pearl/')
        	        .then(response => {
        	            this.pearls = response.data;
        	        });
        	},
        }
    }
</script>
