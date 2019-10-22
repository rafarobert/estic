<template>
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header">Make true al you think</div>
                <div class="card-body">
                    <form action="" v-on:submit.prevent="newTic()">
                        <div class="form-group">
                            <label for="tic">Now I'm thinking on:</label>
                            <input type="text" class="form-control" id="tic" name="tic" v-model="description">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Send Tic
                        </button>
                    </form>
                </div>
            </div>
        </div>
</template>

<script>

    export default {
        data() {
            return {
                description: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newTic() {
                const params = {
                    description: this.description
                };
                window.axios.post('/tic', params).then((resp) => console.log(resp));
                let tic = {
                    id: 2,
                    description: this.description,
                    created_at: '11/22/3333'
                };
                this.$emit('new',tic);
                this.description = '';
            }
        }
    }
</script>
