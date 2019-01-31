<template>
  <b-container>
    <b-table show-empty
             stacked="md"
             :items="items"
             :fields="fields"
             :current-page="currentPage"
             :per-page="perPage"
             :filter="filter"
             :sort-by.sync="sortBy"
             :sort-desc.sync="sortDesc"
             :sort-direction="sortDirection"
             @filtered="onFiltered"
    ></b-table>

    <h6>Small</h6>
      <b-pagination size="sm" :total-rows="100" v-model="currentPage" :per-page="10">
      </b-pagination>
  </b-container>
  <br>
</template>

<script>


export default {
  data () {
    return {
       fields: [
        {
          key: 'nivel',
          sortable: true
        },
        {
          key: 'acuerdo',
          sortable: true
        },
        {
          key: 'estado',
          sortable: true,
          // Variant applies to the whole column, including the header and footer
          //variant: 'danger'
        },
        {
          key: 'nombreFiscal',
          sortable: true
        },
        {
          key: 'nombreUnidad',
          sortable: true
        },
        {
          key: 'numFiscal',
          sortable: true
        },
        {
          key: 'numCarpeta',
          sortable: true
        },
        {
          key: 'estadoCarpeta',
          sortable: true
        },
        {
          key: 'fechaInicio',
          sortable: true
        },
      ],
      items: [ ],
      currentPage: 1,
      perPage: 5,
      totalRows: items.length,
      pageOptions: [ 5, 10, 15 ],
      sortBy: null,
      sortDesc: false,
      sortDirection: 'asc',
      filter: null,
      modalInfo: { title: '', content: '' }

    }

  },
  props:['carpetasprop'],

  mounted(){
    if(this.carpetasprop){
      this.items =this.carpetasprop;
    }
  }

}
</script>
