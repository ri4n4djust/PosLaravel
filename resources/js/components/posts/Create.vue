<template>
    <div class="mt-3">
      <div class="card-header">TAMBAH BARANG</div>
        <div class="card-body">
        
        <form  @submit.prevent="PostStore" ref="anyName" id="anyName">
        <!-- left column -->
            <div class="col-md-6">
          <!-- general form elements -->
                <div class="box box-primary">

                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" class="form-control" v-model="post.kdBarang">
                                <div v-if="validation.kdBarang">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.kdBarang[0] }}
                                    </div>
                                </div>
                            </div>

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
                            <label>Select Kategori:</label>
                            <select class='form-control' v-model='post.ktgBarang'>
                                <option value='0' >Select Country</option>
                                <option v-for='data in countries' :value='data.kodeKtg' :key='data.id'>{{ data.namaKtg }}</option>
                            </select>
                        </div>

                        <input type="text" class="form-control" v-for='data in countries' :key='data.id' v-model="data.namaKtg">
                            
                            <div class="form-group">
                                <button type="submit"  class="btn btn-md btn-success">SIMPAN</button>
                                <button type="reset" @click="reset()" class="btn btn-md btn-danger">RESET</button>
                            </div>
                </div>
            </div>
    

      
        <!-- left column -->
            <div class="col-md-6">
          <!-- general form elements -->
                <div class="box box-info">

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
                                <label>Satuan</label>
                                <input type="text" class="form-control" v-model="post.satuanBarang">
                                <div v-if="validation.satuanBarang">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.satuanBarang[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>QTY Min</label>
                                <input type="text" class="form-control" v-model="post.qtyMin">
                                <div v-if="validation.qtyMin">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.qtyMin[0] }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>QTY Max</label>
                                <input type="text" class="form-control" v-model="post.qtyMax">
                                <div v-if="validation.qtyMax">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.qtyMax[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Merek</label>
                                <input type="text" class="form-control" v-model="post.merek">
                                <div v-if="validation.merek">
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ validation.merek[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
<datepicker class="form-control" v-model="currentDateWithFormat" name="tgl" ></datepicker>
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
                        
                                         
                    
                </div>
            </div>
         </form>
    
   </div>


   <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Harga Pokok</th>
                                    <th>Harga Jual</th>
                                    
                                    <th>Stok Barang</th>
                                    <th>ggg</th>
                                    <th>Kategori</th>
                                    <th>Satuan</th>
                                    <th>Deskripsi</th>
                                    <th>AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="post1 in users" :key="post1.id">
                                    <td>{{ post1.kdBarang }}</td>
                                    <td>{{ post1.nmBarang }}</td>
                                    <td>{{ post1.hrgPokok | currency }}</td>
                                    <td>{{ post1.hrgJual | currency }}</td>
                                    
                                    <td>{{ post1.stkBarang }}</td>
                                    <td>{{ post1.hrgPokok * post1.stkBarang | currency }}</td>
                                    <td>{{ post1.ktgBarang }}</td>
                                    <td>{{ post1.satuanBarang }}</td>
                                    <td>{{ post1.deskripsi }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'detail', params: { id: post1.id }}" class="btn btn-sm btn-primary">Detail</router-link>
                                        <router-link :to="{name: 'edit', params: { id: post1.id }}" class="btn btn-sm btn-primary">EDIT</router-link>
                                        <button @click.prevent="PostDelete(post1.id, index)" class="btn btn-sm btn-danger">HAPUS</button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th></th>
                                    <th>Harga Jual</th>
                                    
                                    <th>Stok Barang</th>
                                    <th>ggg</th>
                                    <th>Kategori</th>
                                    <th>Satuan</th>
                                    <th>Deskripsi</th>
                                    <th>AKSI</th>
                                </tr>
                                </tfoot>
                            </table>


</div>
      
  
  
</template>


<script>
import Datepicker from 'vuejs-datepicker';

    export default {
        data() {
            return {
                post: {},
                users: {},
                validation: [],
                country: 0,
                countries: [],
                total: {},
                currentDateWithFormat: '',
                
            }
            
        },
        components: {
            Datepicker
        },
        
        

        methods: {
            
            callFunction() {
            var currentDateWithFormat = new Date().toJSON().slice(0,10).replace(/-/g,'/');
            this.currentDateWithFormat = currentDateWithFormat;
            alert(currentDateWithFormat);
            
            },
            PostStore() {
                let uri = '/api/posts/store';
                this.axios.post(uri, this.post)
                    .then((response) => {
                        const path = '/barang/create'
                        this.$router.push(path)
                        this.loadData()
                        this.resetForm()
                    }).catch(error => {
                    this.validation = error.response.data.data;
                });
            },
            PostDelete(id, index)
            {
                this.axios.delete(`/api/posts/${id}`)
                    .then(response => {
                        this.posts.splice(index, 1);
                    }).catch(error => {
                    alert('system error!');
                });
            },
            resetForm() {
                // ref='textareaform'
                // reset() method resets the values of all elements in a form
                //document.getElementById("formTambah").reset(); 
                // this.$refs.formTambah.reset()
                document.getElementById('myInput').value = ''
                alert('reset donkkkkkkkk');
                //this.$refs.formTambah.reset()
            },
            getCountries: function(){
                axios.get('/get_countries')
                    .then(function (response) {
                        this.countries = response.data;
                    }.bind(this));
            },
            loadData:function(){
                let uri = '/api/posts';
                this.axios.get(uri).then(response => {
                this.users = response.data.data;
                
            });
            },
        },
   
        created: function(){
            this.getCountries()
            this.loadData()
            this.callFunction()
        }
    }
    
</script>

