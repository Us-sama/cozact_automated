<script setup>
    import Axios from "axios";
    import {
        useRouter
    } from "vue-router";

    import {
        ref
    } from "vue"
    let form = ref({
        Nom_automatisme: '',
        projet: '',
        campagne: '',
    })

    const router = useRouter();
    const annuler = () =>{
        router.push('/')
    }

    const saveAutomatisme = () => {
        const formData = new FormData();
        formData.append('Nom_automatisme', form.value.Nom_automatisme);
        formData.append('projet', form.value.projet);
        formData.append('campagne', form.value.campagne);

        Axios.post("/api/add_automatisme", formData)
            .then((response) =>{
                form.value.Nom_automatisme = '',
                form.value.projet = '',
                form.value.campagne = '',

                router.go(-1)
                toast.fire({
                    icon: "success",
                    title: "Automatisme ajouté avec success :)"
                })

            })
            .catch((error) => {

            })

    }

</script>
<template>
    <div class="container pt-4 mt-4">
        <div class="row">
            <div class="col"></div>
            <div class="col shadow-lg p-4 mb-5 bg-body rounded mt-5 position-relative">



                <form action="">
                    <div class="mb-3">
                        <label for="Nom_automatisme" class="form-label">Nom du l'automatisme</label>
                        <input type="text" class="form-control" id="Nom_automatisme" aria-describedby="emailHelp"
                            name="Nom_automatisme" v-model="form.Nom_automatisme">
                        <div id="Nom_automatisme" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="projet" class="form-label">Projet</label>
                        <select class="form-select" aria-label="Default select example" name="projet" id="projet"
                            v-model="form.projet">
                            <option selected disabled>Selectionner un projet</option>
                            <option value="1">Projet 1</option>
                            <option value="2">Projet 2</option>
                            <option value="3">Projet 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="campagne" class="form-label">Campagne</label>
                        <select class="form-select" aria-label="Default select example" name="campagne" id="campagne"
                            v-model="form.campagne">
                            <option selected disabled>selctionner une campagne</option>
                            <option value="1">campagne 1</option>
                            <option value="2">campagne 2</option>
                            <option value="3">campagne 3</option>

                        </select>
                    </div>

                    <button class="btn btn-primary float-end mt-3 " style="background-color: #3B32C0;" @click="saveAutomatisme()">Ajouter</button>
                    <button class="btn btn-primary float-end mt-3 " style="margin-right:15px ; background-color: #3B32C0;" @click="annuler()" >annuler</button>

                </form>
            </div>
            <div class="col"></div>
        </div>



    </div>
</template>
