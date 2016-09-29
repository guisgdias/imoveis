Vue.filter('fullAddress', function (imovel) {
    let address = "";
    if(imovel.address != "" ){
        address += imovel.address+", ";
    }
    if(imovel.number != "" ){
        address += imovel.number+", ";
    }
    if(imovel.complement != "" ){
        address += imovel.complement+", ";
    }
    if(imovel.district != "" ){
        address += imovel.district+", ";
    }
    if(imovel.city != "" ){
        address += imovel.city;
    }
    if(imovel.uf != "" ){
        address += " - "+imovel.uf;
    }
    return address;
});

new Vue({
    el: 'body',

    data:{
        search: {
            address: ''
        }

    },

    ready: function(){
        this.fetchImoveis();
    },

    methods: {
        fetchImoveis: function(){
            this.$http.get('/api/public/imoveis').then((imoveis) => {
                this.$set('imoveis', imoveis.data.data);
            });
        },

        onSubmitForm: function(e){
            e.preventDefault();
            this.$http.get('/api/public/imoveis?address='+this.search.address).then((imoveis) => {
                this.$set('imoveis', imoveis.data.data);
        });
        }
    }
});