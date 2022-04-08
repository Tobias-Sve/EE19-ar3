let app = Vue.createApp(
    {
        data() {
            return {
                albums: [
                    {
                        title: "Liquid Swords",
                        artist: "GZA",
                        genre: "Rap"
                    },
                    {
                        title: "Operations Doomsday",
                        artist: "MF Doom",
                        genre: "Hiphop"
                    },
                    {
                        title: "Blazing Arrow",
                        artist: "Blackalicious",
                        genre: "Hiphop"
                    },
                ],
                genres: [
                    "Choose one",
                    "Techno",
                    "Hiphop",
                    "Soul",
                    "Drum 'n' base",
                    "Rap",
                    "Rnb"
                ]
            }
        },
        methods: {
            addAlbum () {
               this.albums.push({title: "Untitled", artist: "Anon", genre: "Choose"});
            },
            removeAlbum (album) {
                this.albums.splice(this.albums.indexOf(album), 1);
            }
        }
    }
)

app.mount("#app-root")

