

<?php $__env->startSection('content'); ?>
    <h1>Halaman Produk</h1>
    <hr>
    <a href="/product/tambah" class="btn btn-secondary mb-3">Tambah Produk</a>
        <div class="alert alert-primary">
            <b>Nama Toko:</b> <?php echo e($data['Nama Toko']); ?> 
            <br>
            <b>Alamat:</b> <?php echo e($data['Alamat']); ?> 
            <br>
            <b>Type:</b> <?php echo e($data['Type']); ?> 
        </div>
        <div>
            Daftar Produk:
        </div>
        <div class="card">
        <div class="card-body">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Laptop ROG</td>
                    <td>25</td>
                    <td>Rp 15.000.000</td>
                    <td>
                        <button type="button" class="btn btn-warning">Hapus</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                    <th scope="row">1</th>
                    <td>Laptop ROG</td>
                    <td>25</td>
                    <td>Rp 15.000.000</td>
                    <td>
                        <button type="button" class="btn btn-warning">Hapus</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                    <th scope="row">1</th>
                    <td>Laptop ROG</td>
                    <td>25</td>
                    <td>Rp 15.000.000</td>
                    <td>
                        <button type="button" class="btn btn-warning">Hapus</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                    <th scope="row">1</th>
                    <td>Laptop ROG</td>
                    <td>25</td>
                    <td>Rp 15.000.000</td>
                    <td>
                        <button type="button" class="btn btn-warning">Hapus</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project_laravel\resources\views/pages/produk.blade.php ENDPATH**/ ?>