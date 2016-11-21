<template>
    <div class="singlepearl">
        <div class="col-md-4">
            <div class="flex-video widescreen ">
                <iframe width="360" height="203" 
                    :src="'https://www.youtube.com/embed/' + pearl.videos[0].adress + '?rel=0&amp;showinfo=0'" 
                    frameborder="0" allowfullscreen
                >
                </iframe>
            </div>
        </div>
        <div class="col-md-8">
            <div class="contentelement">
                <h2>{{ pearl.title }}</h2>     
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="btn">Share</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn">Geef reactie</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn">Houd me op de hoogte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </div> 

</template>

<script>

    export default {
        props: [
            'pearl',
            'active'
        ],

    	data() {
    		return {

    		}
    	},

        mounted() {
            console.log('Single Pearl ready.');

        },

		methods: {
            setActive: function (category) {
                if (category.id == this.active.id) {
                    this.filteredpearls = this.pearls;
                    this.active = {};
                    return
                }
                this.active = category;
                this.filteredpearls = this.pearls.filter( function(pearl){
                    return pearl.categories[0].id == category.id;
                })
            },
        },
    }
</script>
