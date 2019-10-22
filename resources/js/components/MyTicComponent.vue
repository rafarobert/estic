<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component @new="addTic"></form-component>
            <tic-component
                v-for="(tic, index) in tics"
                :key="tic.id"
                :tic="tic"
                @update="updateTic(index, ...argument)"
                @delete="deleteTic(index)">
            </tic-component>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tics: [{
                    'id' : 1,
                    'description': 'ABC',
                    'created_at': '17/07/2018'
                }]
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            addTic(tic) {
                this.tics.push(tic)
            },
            updateTic(index, tic){
                this.tics[index] = tic;
            },
            deleteTic(index){
                this.tics.splice(index, 1);
            }
        }
    }
</script>
