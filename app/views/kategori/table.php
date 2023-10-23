<style>
    table tr th, table tr td{
        border:1px solid black;
    }
</style>
<a href="<?=base_url('/kategori/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Kategori Buku</th>
            <th>Kode DDC</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody> 
        <?php foreach($daftar_kategori as $k=>$v): ?>
            <tr>
                <td><?=$v['kategori'] ?></td>
                <td><?=$v['kode_ddc'] ?></td>
                <td> <a href="<?=base_url("/kategori/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('Apakah ingin menghapus file ini??')" action="<?=base_url('kategori/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>