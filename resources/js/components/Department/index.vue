<template>
    <div class="container">
        <b-table :items="tableItems" bordered hover></b-table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tableItems: [{
                    name: 'Jeff',
                    location: 'New Jersey',
                    id: 1
                },{
                    name: 'Jeff',
                    location: 'New Jersey',
                    id: 2
                },{
                    name: 'Jeff',
                    location: 'New Jersey',
                    id: 3
                },{
                    name: 'Jeff',
                    location: 'New Jersey',
                    id: 4
                },{
                    name: 'Jeff',
                    location: 'New Jersey',
                    id: 5
                },]
            }
        },
        components: {

        }
    }
</script>

<style lang="sass">

</style>
