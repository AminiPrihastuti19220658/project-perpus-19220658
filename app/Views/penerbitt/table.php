<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/penerbitt/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nama Penerbit</th>
            <th>Kota</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_penerbitt as $k=>$v): ?>
            <tr>
                <td><?=$v['penerbit'] ?></td>
                <td><?=$v['kota'] ?></td>
                <td> <a href="<?=base_url("/penerbitt/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('yakin ingin dihapus??')" action="<?=base_url('penerbitt/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>