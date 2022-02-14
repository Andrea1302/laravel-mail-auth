<template>
    <div class="container" id="videogames">
        <div class="row">
            <div  class="col-4 coltable">
                <h3>
                    Title
                </h3>
            </div>

            <div class="col-3 coltable">
                <h3>
                    Subtitle
                </h3>
            </div>

            <div class="col-3 coltable">
                <h3>
                    rating
                </h3>

            </div>
            <div class="col-2 coltable" >
               
                    Action
                
            </div>
        </div>

        <div class="row"  v-for="videogame,i in videogames" :key="i">
             <div  class="col-4 coltable">
               
                    {{videogame.title}}
            
            </div>

            <div class="col-3 coltable">

               
                    {{videogame.subtitle}}
                
            </div>

            <div class="col-3 coltable">
               
                    {{videogame.votes}}
                
            </div>
            <div class="col-2 coltable" >
                <a :href="`/delete/videogame/${videogame.id}`" class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                videogames : [],
            }
        },
        mounted() {
            axios.get('api/getVideogames')
            .then(res => {
                this.videogames = res.data;
            }).catch(err=>{
                console.error(err);
            });
        }
    }
</script>