<template>
	<a :href="PearlAdress(pearl)"
		class="pearl col-md-2"
	>
		<img :src="returnRoot + '/img/transparent.png'" alt="" class="tsquare">
		<div 
			class="ring"
			:class="'ring-' + pearl.categories[0].id"
            :style="{ backgroundImage: 'url(http://img.youtube.com/vi/' + pearl.videos[0].adress + '/sddefault.jpg)' }"
		>
            <img src="/img/playtrans.png" alt="" class="playicon center-block">
		</div>
		<span>{{ pearl.title }}</span>
	</a>
</template>

<script>
    export default {
        mounted() {
            console.log('Parel ready ')
        },

        data: {
            image: "http://1.bp.blogspot.com/-8PfnHfgrH4I/TylX2v8pTMI/AAAAAAAAJJ4/TICBoSEI57o/s1600/search_by_image_image.png"
        },

        props: [
        	'pearl'
        ],

        methods: {
            PearlAdress: function(pearl){
                return this.returnRoot + '/pearls/' + pearl.id;
            }
        },

        computed: {
            thumbURL: function () {
                return 'http://img.youtube.com/vi/' + this.pearl.videos[0].adress + '/sddefault.jpg'
            },

            returnRoot: function () {
                return (window.location.protocol + "//" + window.location.host);
            },
        }

    }
</script>
