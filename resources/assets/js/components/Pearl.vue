<template>
	<div 
		class="pearl col-md-2"
		@click="setThisActive()"
	>
		<img src="img/transparent.png" alt="" class="tsquare">
		<div 
			class="ring"
			:class="'ring-' + pearl.categories[0].id"
            :style="{ backgroundImage: 'url(' + image + ')' }"
		>
		</div>
		<span>{{ pearl.title }}</span>
	</div>
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
        	setThisActive: function () {
        		console.log('setting active');
        		this.$emit('setactivepearl', this.pearl);
        		console.log(this.pearl.id);
        	}
        },

        computed: {
            thumbURL: function () {
                return 'http://img.youtube.com/vi/' + this.pearl.videos[0].adress + '/sddefault.jpg'
            }
        }

    }
</script>
