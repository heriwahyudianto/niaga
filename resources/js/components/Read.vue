<template>
  <div>
    <div class="clearfix">
      <div class="max-width-4 mx-auto p2">
        <div class="row">
          <div class="col-md-10">
            <h4>Paket</h4>
          </div>
          <div class="col-md-2">
            <!-- push router ke form membuat data -->
            <router-link class="btn btn-primary w-100" to="/create">+ Tambah</router-link>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
              <th scope="col">Promo</th>
              <th scope="col">Jml. User</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- menampilkan data ke table -->
            <tr v-for="paket in pakets" :key="paket.id">
              <td style="width:40%">{{paket.nama}}</td>
              <td style="width:40%">{{paket.harga}}</td>
              <td style="width:40%">{{paket.promo}}</td>
              <td style="width:40%">{{paket.jmluser}}</td>
              <td style="width:40%">{{paket.ket}}</td>
              <td style="width:20%">
                <router-link class="btn btn-warning" :to="'/detail/'+paket.id">Update</router-link>
                <button class="btn btn-danger" v-on:click="deleteData(paket.id)">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<!-- script js -->
<script>
export default {
  data() {
    return {
      // variable array yang akan menampung hasil fetch dari api
      pakets: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      // fetch data dari api menggunakan axios
      axios.get("http://localhost:8001/api/paket").then(response => {
        // mengirim data hasil fetch ke varibale array pakets
        this.pakets = response.data;
      });
    },
    deleteData(id) {
      // delete data
      axios.delete("http://localhost:8001/api/paket/" + id).then(response => {
        this.loadData();
      });
    }
  }
};
</script>
