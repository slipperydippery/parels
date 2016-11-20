<template>
	<div class="pearl col-md-2">
		<img src="img/transparent.png" alt="" class="tsquare">
		<div 
			class="ring"
			:class="'ring-' + pearl.categories[0].id"
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

        props: [
        	'pearl'
        ]

    }
</script>
