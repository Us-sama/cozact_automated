<template>
    <div class="container pt-4 mt-4">
        <div class="row">
            <!-- begin-conditions -->
            <div class="col shadow-lg p-4 mb-5 bg-body rounded mt-5 position-relative">
                <button class="btn float-end mb-4" @click="add">Ajouter une condition</button>
                <div v-for="key in count" :key="key">
                    <div :id="key">
                        <button class="btn float-end mb-4 text-danger " @click="remove" v-if="key!=1">X</button>
                        <div class="mb-3 mt-4">
                            <label for="conditions" class="form-label mt-4 ">Si</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                v-model="values['dynamic-field'+key]" :id="key">
                                <option selected disabled>Choisir une option</option>
                                <option value="duree_appel">Durée d'appel</option>
                                <option value="duree_attente">Durée d'attente</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="operator" class="form-label">opérateur</label>
                            <select class="form-select form-select-sm" aria-label="Default select example" id="operator"
                                v-model="values['dynamic-field1'+key]" name="operator">
                                <option selected disabled>Choisir un opérateur</option>
                                <option value="=">égale à</option>
                                <option value="!=">Different de</option>
                                <option value=">=">Superieur ou égale à</option>
                                <option value="<=">Inférieure ou égale à</option>
                                <option value=">">Superieur à</option>
                                <option value="<">Inférieure à</option>
                            </select>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="valeur" class="col-form-label">Valeur</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" id="valeur" class="form-control" min="1"
                                    aria-describedby="valeurHelpInline" v-model="values['dynamic-field2'+key]">
                            </div>
                            <div class="col-auto">
                                <span id="valeurHelpInline" class="form-text">
                                    Entrer la valeur en seconde.
                                </span>
                            </div>
                            <hr class="mt-5">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end" style="background-color: #3B32C0" @click="submit">Show
                    values</button>
            </div>
            <!-- end-conditions -->
            <!--begin-actions -->
            <div class="col shadow-lg p-4 mb-5 bg-body rounded mt-5 ms-5">
                <button class="btn float-end mb-4" @click="add_actions">Ajouter une action</button>
                <div v-for="key in count_actions" :key="key">
                    <div :id="key">
                        <button class="btn float-end mb-4 text-danger " @click="remove_actions" v-if="key!=1">X</button>
                        <div class="mb-3 mt-5" >
                            <label for="action" class="form-label">Action a executer</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" :id="key"
                                v-model="action" name="action" >
                                <option selected disabled>Choisir une action</option>
                                <option value="mail" :action="mail">Envoyer un mail</option>
                                <option value="sms" :action="sms">Envoyer un sms</option>
                            </select>
                        </div>
                        <div class="mb-3" v-if="action=='mail'">
                            <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" v-model="values_actions['action_filed1'+key]">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3" v-if="action=='sms'">
                            <label for="number_sms" class="form-label">Numéro de téléphone</label>
                            <input type="number" class="form-control" id="number_sms" name="number_sms"
                                aria-describedby="smsHelp" v-model="values_actions['action_filed2'+key]">
                            <div id="smsHelp" class="form-text">We'll never share your number with anyone else.</div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'App',
        data: function () {
            return {
                count: 1,
                values: {},
                count_actions: 1,
                values_actions: {},
                action: '',
            }
        },
        methods: {
            add: function () {
                this.count++;
            },
            remove: function () {
                this.count--;
            },
            add_actions: function () {
                this.count_actions++;
            },
            remove_actions: function () {
                this.count_actions--;
            },
            submit: function () {
                for (var key of Object.keys(this.values)) {
                    console.log(this.values[key])
                }
            },
            submit_actions: function () {
                for (var key of Object.keys(this.values_actions)) {
                    console.log(this.values[key])
                }
            }
        }
    }

</script>
