
new Vue({
    el: '#main',

    ready: function(){
        this.getImovel();
    },

    methods: {
        getImovel: function(){
            let url = window.location.href;
            let id = url.split("/").pop();
            this.$http.get('/api/public/imoveis/' + id).then((imoveis) => {
                this.$set('imovel', imoveis.data);
                this.makeFullAddress();
            });
        },
        
        makeFullAddress: function(){
            let address = "";

            if(this.imovel.address != "" ){
                address += this.imovel.address+", ";
            }
            if(this.imovel.number != "" ){
                address += this.imovel.number+", ";
            }
            if(this.imovel.complement != "" ){
                address += this.imovel.complement+", ";
            }
            if(this.imovel.district != "" ){
                address += this.imovel.district+", ";
            }
            if(this.imovel.city != "" ){
                address += this.imovel.city;
            }
            if(this.imovel.uf != "" ){
                address += " - "+this.imovel.uf;
            }

            this.$set('fullAddress', address);
        }
    }
});