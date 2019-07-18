<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Posted On {{ thought.created_at }}</div>
            <div class="card-body">
                <p>{{ thought.description }}</p>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit Thought</button>
                <button type="submit" class="btn btn-danger">Delete Thought</button>
            </div>
        </div>
    </div>       
</template>

<script>
    export default {

        props: ['thought'],

        data()
        {
            return {
            };
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
