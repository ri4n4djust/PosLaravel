<template>
    <div class="mt-3">
                    <div class="card-header">TAMBAH BARANG</div>

                    <div class="card-body">

                        <form @submit.prevent="PostStore">

                            <div class="form-group">
                                <label>TITLE</label>
                                <input type="text" class="form-control" v-model="post.nmBarang"
                                       placeholder="Masukkan Title">
                                <div v-if="validation.nmBarang">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.nmBarang[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Harga Pokok</label>
                                <input type="text" class="form-control" v-model="post.hrgPokok"
                                       placeholder="Harga Pokok">
                                <div v-if="validation.hrgPokok">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.hrgPokok[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="text" class="form-control" v-model="post.hrgJual"
                                       placeholder="Harga Jual">
                                <div v-if="validation.hrgJual">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.hrgJual[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" class="form-control" v-model="post.stkBarang"
                                       placeholder="Stok Barang">
                                <div v-if="validation.stkBarang">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.stkBarang[0] }}
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>KONTEN</label>
                                <textarea class="form-control" v-model="post.deskripsi" rows="5"
                                          placeholder="Masukkan Konten"></textarea>
                                <div v-if="validation.deskripsi">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.deskripsi[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" v-on:change="onImageChange">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-danger">RESET</button>
                            </div>


                        </form>


                    </div>
                </div>
      
  
  
</template>


<script>
    export default {
        data() {
            return {
                post: {},
                validation: []
            }
        },
        methods: {
            onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];

            },
            PostStore() {
                let uri = 'http://localhost:8000/api/posts/store';
                this.axios.post(uri, this.post)
                    .then((response) => {
                        this.$router.push({
                            name: 'posts'
                        });
                    }).catch(error => {
                    this.validation = error.response.data.data;
                });
            }
        }
    }
</script>
