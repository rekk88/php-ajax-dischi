const app = new Vue({
    el : "#app",
    data:{
       //variables here
       url:"api/api-albums.php",
       vet:"",
    },
    mounted() {
        axios
            .get(this.url)
            .then(k => {
                console.log(k.data); //ottengo l'array con tutti gli album
               
            })
    },
    methods: {
        
    },
})