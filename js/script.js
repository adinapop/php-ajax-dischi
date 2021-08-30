Vue.config.devtools = true; // per estensione
new Vue(    
    {
        el: '#app',
        data: {
            // empty array that will be populated by axios
            albums: []
        },
        created() {
            
            axios.get("http://localhost:8888/php-ajax-dischi/backend/apiCall.php")
                .then((result) => {
                    this.albums = result.data;
            })   
        }
    }
);