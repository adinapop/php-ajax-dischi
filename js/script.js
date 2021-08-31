Vue.config.devtools = true; // per estensione

new Vue(    
    {
        el: '#app',
        data: {
            // empty array that will be populated by axios
            albums: [],
            selectGenre: '',
            filteredAlbums: [],
            genreList: [],
        },
        created() {
            
            axios.get("http://localhost:8888/php-ajax-dischi/backend/apiCall.php")
                .then((result) => {
                    this.albums = result.data;
            })   
        },
        methods: {
            apiFilteredCall() {
                return "http://localhost:8888/php-ajax-dischi/backend/apiFiltered.php" + "?genre=" + this.selectGenre;
            },

            getFilteredAlbums() {
                axios.get(this.apiFilteredCall())
                    .then((respone) => {
                        this.filteredAlbums = respone.data
                })
            },

            getGenreList() {
                this.albums.forEach((album) => {
                  if(!this.genreList.includes(album.genre)){
                    this.genreList.push(album.genre)
                  }
                })
            },
        }
    }
);