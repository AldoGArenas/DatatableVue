
<template>
  <b-container fluid>
    <!-- User Interface controls -->
    <b-row>
      <b-col md="6" class="my-1">
        <b-form-group horizontal label="Filter" class="mb-0">
          <b-input-group>
            <b-form-input v-model="filter" placeholder="Type to Search" />
            <b-input-group-append>
              <b-btn :disabled="!filter" @click="filter = ''">Clear</b-btn>
            </b-input-group-append>
          </b-input-group>
        </b-form-group>
      </b-col>
      <b-col md="6" class="my-1">
        <b-form-group horizontal label="Sort" class="mb-0">
          <b-input-group>
            <b-form-select v-model="sortBy" :options="sortOptions">
              <option slot="first" :value="null">-- none --</option>
            </b-form-select>
            <b-form-select :disabled="!sortBy" v-model="sortDesc" slot="append">
              <option :value="false">Asc</option>
              <option :value="true">Desc</option>
            </b-form-select>
          </b-input-group>
        </b-form-group>
      </b-col>
      <b-col md="6" class="my-1">
        <b-form-group horizontal label="Sort direction" class="mb-0">
          <b-input-group>
            <b-form-select v-model="sortDirection" slot="append">
              <option value="asc">Asc</option>
              <option value="desc">Desc</option>
              <option value="last">Last</option>
            </b-form-select>
          </b-input-group>
        </b-form-group>
      </b-col>
      <b-col md="6" class="my-1">
        <b-form-group horizontal label="Per page" class="mb-0">
          <b-form-select :options="pageOptions" v-model="perPage" />
        </b-form-group>
      </b-col>
    </b-row>

    <!-- Main table element -->
    <b-table show-empty
             stacked="md"
             :items="items"
             :dark="dark"
             :striped="striped"
             :small="small"
             :fields="fields"
             :current-page="currentPage"
             :per-page="perPage"
             :filter="filter"
             :sort-by.sync="sortBy"
             :sort-desc.sync="sortDesc"
             :sort-direction="sortDirection"
             @filtered="onFiltered"
    >


      <template slot="name" slot-scope="row">{{row.value.first}} {{row.value.last}}</template>
      <template slot="isActive" slot-scope="row">{{row.value?'Yes :)':'No :('}}</template>
      <template slot="actions" slot-scope="row">
        <!-- We use @click.stop here to prevent a 'row-clicked' event from also happening -->
        <b-button size="sm" @click.stop="info(row.item, row.index, $event.target)" class="mr-1">
          Info modal
        </b-button>
        <b-button size="sm" @click.stop="row.toggleDetails">
          {{ row.detailsShowing ? 'Hide' : 'Show' }} Details
        </b-button>
      </template>
      <template slot="row-details" slot-scope="row">
        <b-card>
          <ul>
            <li v-for="(value, key) in row.item" :key="key">{{ key }}: {{ value}}</li>
          </ul>
        </b-card>
      </template>
    </b-table>

    <b-row>
      <b-col md="6" class="my-1">
        <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="currentPage" class="my-0" />
      </b-col>
    </b-row>

    <!-- Info modal -->
    <b-modal id="modalInfo" @hide="resetModal" :title="modalInfo.title" ok-only>
      <pre>{{ modalInfo.content }}</pre>
    </b-modal>

  </b-container>
</template>

<script>
export default {
  data () {
    return {
      fields: [],
      items: [],
      striped: true,
     bordered: false,
     outlined: false,
     small: true,
     hover: false,
     dark: false,
     fixed: false,
     footClone: false,
      currentPage: 1,
      perPage: 5,
      totalRows: 0,
      pageOptions: [ 5, 10, 15 ],
      sortBy: null,
      sortDesc: false,
      sortDirection: 'asc',
      filter: null,
      modalInfo: { title: '', content: '' }
    }
  },
  computed: {
    sortOptions () {
      // Create an options list from our fields
      return this.fields
        .filter(f => f.sortable)
        .map(f => { return { text: f.label, value: f.key } })
    }
  },
  props:['itemsprop','fieldsprop'],

  methods: {
    info (item, index, button) {
      this.modalInfo.title = `Row index: ${index}`
      this.modalInfo.content = JSON.stringify(item, null, 2)
      this.$root.$emit('bv::show::modal', 'modalInfo', button)
    },
    resetModal () {
      this.modalInfo.title = ''
      this.modalInfo.content = ''
    },
    onFiltered (filteredItems) {
      // Trigger pagination to update the number of buttons/pages due to filtering
      this.totalRows = filteredItems.length
      this.currentPage = 1
    },
    getCarpet(){
        // Here we don't set isBusy prop, so busy state will be handled by table itself
        // this.isBusy = true
        const urlGetCarpetas =  'get-carpetas' ;
    axios.get(urlGetCarpetas).then(data=>  {
        this.items = data.data
        console.log(data);
        // Here we could override the busy state, setting isBusy to false
        // this.isBusy = false
        return(data.data)
      })
	   },
  },
  mounted(){
    if(this.itemsprop){
      this.items =this.itemsprop;
      this.totalRows = this.items.length
    }
    if(this.fieldsprop){
      this.fields =this.fieldsprop;
    }
    this.getCarpet()
  }
}
</script>


// export default {
//   data () {
//     return {
//        fields: [
//         {
//           key: 'nivel',
//           sortable: true
//         },
//         {
//           key: 'acuerdo',
//           sortable: true
//         },
//         {
//           key: 'estado',
//           sortable: true,
//           // Variant applies to the whole column, including the header and footer
//           //variant: 'danger'
//         },
//         {
//           key: 'nombreFiscal',
//           sortable: true
//         },
//         {
//           key: 'nombreUnidad',
//           sortable: true
//         },
//         {
//           key: 'numFiscal',
//           sortable: true
//         },
//         {
//           key: 'numCarpeta',
//           sortable: true
//         },
//         {
//           key: 'estadoCarpeta',
//           sortable: true
//         },
//         {
//           key: 'fechaInicio',
//           sortable: true
//         },
//       ],
//       items: [ ],
//       currentPage: 1,
//       perPage: 5,
//       totalRows: items.length,
//       pageOptions: [ 5, 10, 15 ],
//       sortBy: null,
//       sortDesc: false,
//       sortDirection: 'asc',
//       filter: null,
//       modalInfo: { title: '', content: '' }

//     }

//   },
//   props:['carpetasprop'],

//   mounted(){
//     if(this.carpetasprop){
//       this.items =this.carpetasprop;
//     }
//   }

// }
// </script>
