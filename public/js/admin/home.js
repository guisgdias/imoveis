
Vue.http.headers.common['Authorization'] = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImUwNWNjZTBiODQ5M2YwYjYyNjBjZDk3NTViOTAzNzNhY2RmOTZmNzYzZjg5ZDc5YTM3MWIyNWM3OTRmZjIwMjFiNjE0YzAzYTE3MDYyNjc4In0.eyJhdWQiOiIxIiwianRpIjoiZTA1Y2NlMGI4NDkzZjBiNjI2MGNkOTc1NWI5MDM3M2FjZGY5NmY3NjNmODlkNzlhMzcxYjI1Yzc5NGZmMjAyMWI2MTRjMDNhMTcwNjI2NzgiLCJpYXQiOjE0NzUwOTY2MDgsIm5iZiI6MTQ3NTA5NjYwOCwiZXhwIjoxNDc2MzkyNjA3LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.j2ZFERY9KRvafiClM_BSyWOvUNFX8Ll5Vyku3bQ9MBv749F9xEuJJoLtTgxoSIIyF82H8jjzxDmPaS2T7sO965kTn1228MoyluPiW_l7PdhoojhgtgcA-NY7OsYnQl3Pu138YjZxSSqtMnoljLeJawSZi3MbLpHxEL1xc5ZC3mNj0hiks38eQMqBaM4CkrE-s-1qriQ9J9p8eipkKtaML5ZX5X8EKImjnosjvyspk0dvBCnFfPJkbzhwvcDtZrxogotM4Wje0L-gsWqE_CwWFBBAjaHdFCn3HtuPv-sbpu06WIC0GdZmn1tao0Lxcos2x3Cmq92Up3Qgt9wWxHtSQl_-HVckUitgU7IMTeznc0us0z0GQA0D2iwXjE05W35GARW-0es9myIiYhSkfl3KJV8HsuPsQVrYjavdo_-SW816sFwm-d_zkykH1rNqlU1H1WolK36MMfDn2eY_T9b-Fzz4tvW5u10woGwp8diRj8K68UCodOZaImYgDPKCFg6k5Xq2_dpdY3CWeH27BaPYQbl1bXeS-FDxTyub8BLo2k5F0gbrejhBPTVCFyDwNtQn2k0Pf-4Kfy6WJ__YwGN2Hfnn9agZbeyMDxn_ENHhVp8xQtpWUrQgwfGlP7ilIsj2fBoQe_wfxS_YiAbzV6X-rbno97Peqi6audrWmf5MXGU';

new Vue({
    el: 'body',

    data:{
        imoveis: {}


    },

    ready: function(){
        this.getImoveisFromUser();
    },

    methods: {
        getImoveisFromUser: function(){
            this.$http.get('/api/admin/imoveis').then((imoveis) => {
                this.imoveis = imoveis.data.data;
                console.log(this.imoveis);
            });
        }
    }
});

function getCookie(name)
{
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
}