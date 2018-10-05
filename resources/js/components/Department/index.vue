<template>
    <div class="container">
        <b-card >
          <h2 class="card-title"> Departments </h2>
            <b-form-group>
                <b-row class="d-flex justify-content-center">
                    <b-col md='8'>
                        <b-form-input :v-model="newItem.name"></b-form-input>
                    </b-col> 
                    <b-col md='1'>
                        <b-button type="submit" variant="primary"> Add </b-button>
                    </b-col>
                </b-row>    
            </b-form-group>
            <b-table class="mt-2" :items="tableItems" bordered hover></b-table>    
        </b-card>
    </div>
</template>

<script>
export default {
  data() {
    return {
      newItem: {
        name: ""
      },
      tableItems: [
        {
          name: "Department 1",
          location: "New Jersey",
          id: 1
        },
        {
          name: "Department 2",
          location: "Mexico",
          id: 2
        },
        {
          name: "Department 3",
          location: "New Jersey",
          id: 3
        },
        {
          name: "Department 4",
          location: "Mumbai",
          id: 4
        },
        {
          name: "Department 5",
          location: "Taiwan",
          id: 5
        }
      ]
    };
  },
  components: {}
};
</script>

<style lang="sass">

</style>
