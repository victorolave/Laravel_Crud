<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">What are you thinking now?</div>
                <form action="" v-on:submit.prevent="newThought()">
                    <label for="thought">I'm thinking about...</label>
                    <div class="form-group">
                        <textarea class="form-control" name="thought" cols="30" rows="2" 
                        v-model="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Submit Thought</button>
                </form>
            </div>
    </div>
</template>

<script>
import ThoughtComponentVue from './ThoughtComponent.vue';
    export default {

        data()
        {
            return {
                description: ''
            };
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            newThought(){

                const params = {
                    description: this.description
                }

                this.description = '';

                axios.post('/thoughts', params)
                .then( response => {
                    const thought = response.data;
                    this.$emit('new', thought)
                });
            }
        }
    }
</script>
