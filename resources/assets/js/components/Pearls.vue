<template>
    <div class="pearls">
        <div class="row">
            <div class="col-md-4"
                v-for="category in categories"
            >
                <div 
                    class="btn"
                    :class="['category-' + category.id, nonActive(category)]"
                    @click="setActive(category)"
                >
                    {{ category.title }}
                </div>
            </div>
        </div>
        <div class="row openpearl">
            <singlepearl
                :pearl="activepearl"
                v-if="activepearl.id != 0"
            >
                hey
            </singlepearl>
        </div>
        <div class="row pearllist">
            <h3 v-if="activepearl.id != 0" class="parels_head">Gerelateerde parels:</h3>
            <pearl
                v-for="pearl in filteredpearls"
                :pearl="pearl"
                @setactivepearl="setActivePearl"
            >
            </pearl>
        </div>
    </div> 

</template>

<script>
    import pearl from '../components/Pearl.vue';
    import singlepearl from '../components/Singlepearl.vue';

    export default {
    	data() {
    		return {
    			pearls: [],
                filteredpearls: [],
                activepearl: { id:0 },
                categories: [],
                active: {},
    		}
    	},

        mounted() {
            console.log('Parels ready.');
            this.getPearls();
            this.getCategories();
        },

		methods: {
        	getPearls: function () {
        	    this.$http.get('/api/pearl/')
        	        .then(response => {
        	            this.pearls = response.data;
                        this.filteredpearls = response.data;
        	        });
        	},

            getCategories: function () {
                this.$http.get('/api/category')
                    .then(response => {
                        this.categories = response.data;
                    });
            },

            setActive: function (category) {
                if (this.activepearl.id != 0) {
                    this.activepearl = { id: 0 };
                }
                else if (category.id == this.active.id) {
                    this.filteredpearls = this.pearls;
                    this.active = {};
                    return
                }
                this.active = category;
                this.filteredpearls = this.pearls.filter( function(pearl){
                    return pearl.categories[0].id == category.id;
                })
            },

            nonActive(category) {
                if (this.active != {}) {
                    if (this.active.id != category.id) {
                        return 'nonactive'
                    }
                }
                return 'active';
            },

            setActivePearl: function (pearl) {
                console.log('here');
                this.activepearl = pearl;
                this.active = {};
                this.filteredpearls = this.pearls.filter( function(thispearl){
                    for (var link in pearl.links) {
                        if(thispearl.id == pearl.links[link].id) {
                            return true;
                        }
                    }
                    return false;
                });
            }
        }
    }
</script>
