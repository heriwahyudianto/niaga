<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <h4>Update data</h4>
        <br>
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function updateData() -->
        <form @submit.prevent="updateData()">
          <div class="form-group">
            <label>Nama</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Nama"
              v-model="form.nama"
              required
            >
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Harga"
              v-model="form.harga"
              required
            >
          </div>
          <div class="form-group">
            <label>Promo</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Promo"
              v-model="form.promo"
              required
            >
          </div>
          <div class="form-group">
            <label>Jumlah User</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Jumlah user"
              v-model="form.jmluser"
              required
            >
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Keterangan"
              v-model="form.ket"
              required
            >
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        nama: "",
        promo: "",
        jmluser: "",
        ket: "",
        harga: ""
      }
    };
  },
  created() {
    // load data saat pertama kali halaman dibuka
    this.loadData();
  },
  methods: {
    loadData() {
      // load data berdasarkan id
      axios
        .get("http://localhost:8001/api/paket/" + this.$route.params.id)
        .then(response => {
          // post value yang dari response ke form
          this.form.nama = response.data.nama;
          this.form.promo = response.data.promo;
          this.form.jmluser = response.data.jmluser;
          this.form.ket = response.data.ket;
          this.form.harga = response.data.harga;
        });
    },
    updateData() {
      // put data ke api menggunakan axios
      axios
        .put("http://localhost:8001/api/paket/" + this.$route.params.id, {
          nama: this.form.nama,
          promo: this.form.promo,
          jmluser: this.form.jmluser,
          ket: this.form.ket,
          harga: this.form.harga
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });
    }
  }
};
</script>
