<template>
  <div class="mt3">
    <div class="max-width-4 mx-auto p2 clearfix">
        <div class="border border-d8 center md-col-3 sm-col sm-col-12"
            v-for="paket in pakets" :key="paket.id"
        >
            <div class="border-bottom border-d8"><h4 class="bold my1">{{paket.nama}}</h4></div>
            <p><del>Rp {{paket.harga}}</del></p>
            <p class="border-bottom border-d8 pb1">Rp 
                <span class="bold"><span class="h1 va-webkit">14</span>.900</span>/bln
                {{ paket.promo }}
            </p>
            <div class="border-bottom border-d8">
                <p><span class="bold">{{paket.jmluser}}</span> Pengguna Terdaftar</p>
            </div>
            <div v-html="paket.ket"></div>
            <div class="center my4">
                <a class="btn-white p2 border color-4c border-rad-40 bold" href="#">Selengkapnya</a>
            </div>
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
