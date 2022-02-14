<template>
    <div id="videogames">
        <h1>videogames</h1>

        <table border="1">

            <tr>
                <td>Title</td>
                <td>Sottotitolo</td>
                <td>Rating</td>
            </tr>

            <tr v-for="videogame in videogames" :key="videogame.id">
                
                <td>{{ videogame.title }}</td>
                <td>{{ videogame.subtitle }}</td>
                <td>{{ videogame.rating }}</td>


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

mounted() {

axios.get('api/videogames/list')
     .then(r => this.videogames = r.data)
     .catch(e => console.error(e));


}

}
</script>