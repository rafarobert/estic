<template>
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header">Published on: {{tic.created_at}}</div>
                <div class="card-body">
                    <input v-if="editMode" type="text" class="form-control" v-model="tic.description">
                    <p v-else>{{tic.description}}</p>
                </div>

                <div class="card-footer">
                    <button v-if="editMode" class="btn btn-primary" v-on:click="onUpdate()">Save Changes</button>
                    <button v-else class="btn btn-primary" v-on:click="onEdit()">Edit</button>
                    <button class="btn btn-danger" v-on:click="onDelete()">Delete</button>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        props: ['tic'],
        data() {
            return {
                editMode: false
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onDelete(){
                this.$emit('delete');
                this.editMode = false;
            },
            onEdit(){
                this.editMode = true;
            },
            onUpdate(){
                this.editMode = false;
                this.$emit('update', tic);
            }
        }
    }
</script>
