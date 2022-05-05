const app = {
    data(){
        return{
            message:'Hello World',
            nombre:0
        }
    },
    mounted(){
        setInterval(() => {
            this.nombre++;
        },100);
    }
}

Vue.createApp(app).mount('#toto');