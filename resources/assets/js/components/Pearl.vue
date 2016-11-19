<template>
	<div class="">
		{{ pearl.title }}
	</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Parel ready.')
        },

        props: [
        	'pearl'
        ]

    }
</script>
