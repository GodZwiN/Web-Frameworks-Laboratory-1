var application = new Vue({
    el: '#app',
    data: {
        products: '',
    },
    methods: {
        fetchAllProductsData: function(){
            axios.post('fetchAllProductsData.php', {
                action: 'fetchallproductsdata'
            }).then(function(response){
                application.products = response.data;
            });
        }
    },
    created:function(){
        this.fetchAllProductsData();
    }
});