<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/buku/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Edisi</th>
            <th>Cetakan</th>
            <th>Sinopsis</th>
            <th>Halaman</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Cover file</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_buku as $k=>$v): ?>
            <tr>
                <td><?=$v['judul'] ?></td>
                <td><?=$v['edisi'] ?></td>
                <td><?=$v['cetakan'] ?></td>
                <td><?=$v['sinopsis'] ?></td>
                <td><?=$v['halaman'] ?></td>
                <td><?=$v['penulis'] ?></td>
                <td><?=$v['tahun'] ?></td>
                <td><?=$v['cover_file'] ?></td>
                <td><?=$v['tb_kategori_id'] ?></td>
                <td><?=$v['tb_penerbit_id'] ?></td>
                <td> <a href="<?=base_url("/buku/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('Apakah yakin ingin dihapus??')" action="<?=base_url('buku/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>