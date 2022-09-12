<script setup>
    import Axios from 'axios';

    import {
        onMounted,
        ref
    } from 'vue';
    import {
        useRouter
    } from 'vue-router';



    const router = useRouter()
    let automatismes = ref([])

    onMounted(async () => {
        getAutomatismes()
    })
    const newAutomatisme = () => {
        router.push('/automatismes/new')
    }

    const getAutomatismes = async () => {
        let response = await Axios.get("api/get_all_automatisme")
        automatismes.value = response.data.automatisme
    }

    const onEdit = (id) =>{
        router.push('/automatismes/edit/'+id)
    }
    const gerer = (id) =>{
        router.push('/automatismes/gerer/'+id)
    }
    const deleteAutomatisme = (id) => {
        Swal.fire({
            title:'êtes-vous sûr de vouloir supprimer l\'automatisme',
            text :'La supression est définitive',
            icon:'warning',
            showCancelButton:true,
            cancelButtonText:'Annuler',
            confirmButtonColor:'#3085d6',
            confirmButtonText:'Supprimer',
        })
        .then((result) => {
            if(result.value){
                Axios.get('/api/delete_automatisme/'+id)
                .then(() =>{
                    Swal.fire(
                        'Supprimé',
                        'Automatisme supprimé avec success',
                        'success'
                    )
                    getAutomatismes()
                })
                .catch(() => {
                    Swal.fire('Failed!','There was something wrong','Warning')
                })
            }
        })
    }

</script>
<template>
    <div class="container mt-4 pt-5">
        <div class=" container position-relative">
            <h2 class="mb-4 pb-4">Automatismes</h2>
            <a href="" class="btn btn-outline-dark position-absolute top-0 end-0 shadow mb-5 rounded" @click="newAutomatisme">Ajouter un
                automatisme</a>
        </div>

        <div class="shadow-lg p-4 mb-5 bg-body rounded mt-5">


            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">projet</th>
                        <th scope="col">campagne</th>
                        <th scope="col">Evenement a realiser</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody v-for="item in automatismes" :key="item.id" v-if="automatismes.length > 0">
                    <tr>
                        <th scope="row">#</th>
                        <td>{{item.Nom_automatisme}}</td>
                        <td>{{item.projet}}</td>
                        <td>{{item.campagne}}</td>
                        <td>Envoi mail (example)</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" style="background-color:#3B32C0; color: white;"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href=""  @click="onEdit(item.id)">Modifier</a></li>
                                    <li><a class="dropdown-item"  @click="gerer(item.id)">Gérer</a></li>
                                    <li><a class="dropdown-item"  @click="deleteAutomatisme(item.id)">Supprimer</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tbody v-else>
                    <tr>aucun automatisme pour l'instant</tr>
                </tbody>
            </table>
        </div>

    </div>

</template>
