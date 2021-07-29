const app = new Vue({
    el : "#app",
    data:{
       //variables here
       url:"api/api-albums.php",
       albums:"",
    },
    mounted() {
        axios
            .get(this.url)
            .then(k => {
                //console.log(k.data); ottengo l'array con tutti gli album
                this.albums = k.data;
                console.log(this.albums);
            })
    },
    methods: {
        
    },
})