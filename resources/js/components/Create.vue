<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <h4>Create new data</h4>
        <br>
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="addData()">
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
  data(){
    return{
      form:{
        nama: '',
        harga: '',
        promo: '',
        jmluser: '',
        ket:''
      }
    }
  },
  methods: {
    addData() {
      // post data ke api menggunakan axios
      axios
        .post("http://localhost:8001/api/paket", {
          nama: this.form.nama,
          harga: this.form.harga,
          promo: this.form.promo,
          jmluser: this.form.jmluser,
          ket: this.form.ket
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });
    }
  }
};
</script>
