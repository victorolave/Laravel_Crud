 <template>
    <div class="row justify-content-center">
        
        <form-component
            @new="addThought"
        ></form-component>
        
        <thought-component 
            v-for="thought in thoughts" 
            :key="thought.id" 
            :thought="thought"></thought-component>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                thoughts: [
                    {
                        'id': 1,
                        'description': "abd",
                        'created_at': "17/07/2019"
                    }
                ]
            }
        },

        mounted() {
            console.log('Component mounted.');
        },

        methods: {
            addThought(thought) {
                this.thoughts.push(thought);
            }
        }
    }
</script>
