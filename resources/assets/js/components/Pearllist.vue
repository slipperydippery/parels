<template>
    <div class="pearllist">
        <h3 class="parels_head" v-if="pearlid">Gerelateerde Parels:</h3>
        <h3 class="parels_head" v-else>Parels:</h3>
        <pearl
            v-for="pearl in filteredpearls"
            :pearl="pearl"
        >
        </pearl>
    </div>
</template>

<script>
    import pearl from '../components/Pearl.vue';

    export default {
        data: function() {
            return {
                pearls: [],
                filteredpearls: [],
                categories: [],
                active: {},
                pearl: {},
            }
        },

        props: [
            'pearlid'
        ],

        created() {
            Event.$on('setcategory', this.setActive);
        },

        mounted() {
            this.getPearls();
            this.getCategories();
        },

        methods: {
            getPearls: function () {
                this.$http.get('/api/pearl/')
                    .then(response => {
                        this.pearls = response.data;
                        this.filteredpearls = response.data;
                        if(this.pearlid != 0) {
                            this.setRelatedPearls();
                        }
                    });
            },

            setRelatedPearls: function () {
                var home = this;
                for (var pearl in this.pearls){
                    if (this.pearls[pearl].id == home.pearlid) {
                        home.pearl = this.pearls[pearl];
                    }
                }
                this.pearls = this.pearls.filter( function(thispearl){
                    for (var link in home.pearl.links) {
                        if(thispearl.id == home.pearl.links[link].id) {
                            return true;
                        }
                    }
                    return false;
                });
                this.filteredpearls = this.pearls;
            },

            getCategories: function () {
                this.$http.get('/api/category')
                    .then(response => {
                        this.categories = response.data;
                    });
            },

            setActive: function (category) {
                if (category.id == null) {
                    this.filteredpearls = this.pearls;
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

            filterPearls: function() {
                this.filteredpearls = this.pearls.filter( function(pearl){
                    return pearl.categories[0].id == category.id;
                })
            }
        }
    }
</script>
