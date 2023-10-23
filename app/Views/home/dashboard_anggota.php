<h3>Sistem Informasi Perpustakaan</h3>
<h5>Selamat datang <?=$anggota['nama_lengkap'] ?? ''?> | <?=$anggota['email']?></h5>
<ul>
    <li><a href="<?=base_url('buku')?>">Buku</a></li>
    <li><a href="<?=base_url('peminjaman')?>">Peminjaman</a></li>
    <li><a href="<?=base_url('logout')?>">Keluar</a></li>

</ul>