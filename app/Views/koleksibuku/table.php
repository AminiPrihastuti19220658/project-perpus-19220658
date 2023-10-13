<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/koleksibuku/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nomor Koleksi</th>
            <th>Status Koleksi</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_koleksibuku as $k=>$v): ?>
            <tr>
                <td><?=$v['nomor_koleksi'] ?></td>
                <td><?=$v['status_koleksi'] ?></td>
                <td><?=$v['tb_buku_id'] ?></td>
                <td> <a href="<?=base_url("/koleksibuku/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('yakin ingin dihapus??')" action="<?=base_url('koleksibuku/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>