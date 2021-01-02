<template>

                    <div class="card-body">
                        <h3>
                        <router-link :to="{ name: 'create' }" class="btn btn-md btn-success">TAMBAH BARANG</router-link>
                        </h3>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Harga Pokok</th>
                                    <th>Harga Jual</th>
                                    <th>Stok Barang</th>
                                    <th>Deskripsi</th>
                                    <th>AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(post, index) in posts" :key="post.id">
                                    <td>{{ post.nmBarang }}</td>
                                    <td>{{ post.hrgPokok }}</td>
                                    <td>{{ post.hrgJual }}</td>
                                    <td>{{ post.stkBarang }}</td>
                                    <td>{{ post.deskripsi }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-sm btn-primary">EDIT</router-link>
                                        <button @click.prevent="PostDelete(post.id, index)" class="btn btn-sm btn-danger">HAPUS</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                

</template>
<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = 'http://localhost:8000/api/posts';
            this.axios.get(uri).then(response => {
                this.posts = response.data.data;
            });
        }
    }
</script>


<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = 'http://localhost:8000/api/posts';
            this.axios.get(uri).then(response => {
                this.posts = response.data.data;
            });
        },
        methods: {
            PostDelete(id, index)
            {
                this.axios.delete(`http://localhost:8000/api/posts/${id}`)
                    .then(response => {
                        this.posts.splice(index, 1);
                    }).catch(error => {
                    alert('system error!');
                });
            }
        }
    }
</script>