<template>
  <div class="mt3">
    <div class="max-width-4 mx-auto p2 clearfix">
        <div v-for="paket in pakets" :key="paket.id">
            <div v-if="paket.best === 0">
                <div class="sm-col sm-col-6 border border-d8 center md-col-3 ">
                    <div class="border-bottom border-d8"><h4 class="bold my1">{{paket.nama}}</h4></div>
                    <p><del>Rp {{paket.harga}}</del></p>
                    <p class="border-bottom border-d8 pb1">Rp 
                        <span class="bold"><span class="h1 va-webkit">{{ paket.promo.toString().substring(0,2) }}</span>
                        .{{ paket.promo.toString().substring(2,paket.promo.toString().length) }}</span>/bln
                    </p>
                    <div class="border-bottom border-d8">
                        <p><span class="bold">{{paket.jmluser}}</span> Pengguna Terdaftar</p>
                    </div>
                    <div v-html="paket.ket"></div>
                    <div v-if="paket.diskon === 0" class="center my4">
                        <a class="btn-white p2 border color-4c border-rad-40 bold" href="#">Pilih Sekarang</a>
                    </div>
                    <div v-else-if="paket.diskon > 0" class="center my4">
                        <a class="btn-white p2 border color-4c border-rad-40 bold" href="#">Diskon {{paket.diskon}}%</a>
                    </div>
                </div> 
            </div>
            <div v-else-if="paket.best === 1">
                <div class="sm-col sm-col-6 border border-008 center md-col-3 relative">
                    <img src="/image/best.png" class="absolute best" />
                    <div class="bg-008 border-bottom border-008 pt1"><h4 class="bold color-white mb1 mt0">{{paket.nama}}</h4></div>
                    <p class="bg-008 color-white m0 pb1 pt2"><del>Rp {{paket.harga}}</del></p>
                    <p class="bg-008 border-bottom border-008 color-white m0 pb1 py1">Rp 
                      <span class="bold"><span class="h1 va-webkit">{{ paket.promo.toString().substring(0,2) }}</span>
                      .{{ paket.promo.toString().substring(2,paket.promo.toString().length) }}</span>/bln
                    </p>
                    <div class="border-bottom border-008">
                        <p class="bg-007 color-white m0 py2"><span class="bold">{{paket.jmluser}}</span> Pengguna Terdaftar</p>
                    </div>
                    <div v-html="paket.ket"></div>
                    <div v-if="paket.diskon === 0" class="center my4">
                        <a href="#" class="bg-008 bold border-rad-40 btn-white color-white p2">Pilih Sekarang</a>
                    </div>
                    <div v-else-if="paket.diskon > 0" class="center my4">
                        <a href="#" class="bg-008 bold border-rad-40 btn-white color-white p2">Diskon {{paket.diskon}}%</a>
                    </div>
                </div>
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
