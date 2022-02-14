<template>
    <div id="videogames">
        <h1>videogames</h1>

        <table border="1">

            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Sottotitolo</th>
                <th>Rating</th>
                <th v-if="user">Action</th>

            </tr>

            <tr v-for="videogame in videogames" :key="videogame.id">
                <td>{{ videogame.id }}</td>
                <td>{{ videogame.title }}</td>
                <td>{{ videogame.subtitle }}</td>
                <td>{{ videogame.rating }}</td>
                <td v-if="user">
                    <button class="btn btn-danger" @click="videogameDelete(videogame.id)">DELETE</button>
                </td>


            </tr>


        </table>

    </div>
</template>


<script>
export default {

data: function() {

    return {

        videogames: []
    }
},

props: {

    user: String

},

methods: {

    videogameDelete(id) {
        axios.get(`/api/videogame/delete/${id}`)
             .then(r => { 
                const ind = this.getIndexById(id);
                this.videogames.splice(ind, 1);
             })
             .catch(e => console.error(e));
    },

    getIndexById(id) {

        for (let x = 0; x < this.videogames.length; x++) {

            const videogame = this.videogames[x];

            if(videogame.id == id) {
                return x;
            }

            return -1;
        }

    },
},

mounted() {


axios.get('api/videogames/list')
     .then(r => this.videogames = r.data)
     .catch(e => console.error(e));


}

}
</script>