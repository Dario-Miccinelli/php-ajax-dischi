const app = new Vue(
    {
        el: "#app",

        data() {
            return {
                songs: [],

            };
        },

        methods: {
            getSongs() {
                axios.get("./songs.php").then(
                    (response) => {

                        if (response.status === 200) {
                            this.songs = response.data;
                        }

                    }
                ).catch((error) => console.log(error));
            }
        },

        created() {
            this.getSongs();
        },

    }
);