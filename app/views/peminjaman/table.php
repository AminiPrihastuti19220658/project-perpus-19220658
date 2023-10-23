<style>
    table tr th, table tr td{
        border:1px solid black;
    }
</style>
<a href="<?=base_url('/peminjaman/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead> 
        <tr>
            <th>Nama Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Nama Petugas</th>
            <th>Nama Anggota</th>
            <th>Koleksi Buku</th>
            <th>Denda</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_peminjaman as $k=>$v): ?>
            <tr>
                <td><?=$v['tb_buku_id'] ?></td>
                <td><?=$v['tgl_peminjaman'] ?></td>
                <td><?=$v['tgl_pengembalian'] ?></td>
                <td><?=$v['tb_pengguna_id_peminjaman'] ?></td>
                <td><?=$v['tb_anggota_id'] ?></td>
                <td><?=$v['tb_koleksibuku_id'] ?></td>
                <td><?=$v['denda'] ?></td>
                <td> <a href="<?=base_url("/peminjaman/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('Apakah ingin menghapus file ini??')" action="<?=base_url('peminjaman/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>