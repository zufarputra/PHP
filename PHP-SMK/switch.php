<?php

// $hari = 1;
// switch ($hari) {
//     case '1':
//         echo 'Hari Minggu';
//         break;
//     case '2':
//         echo 'Hari Senin';
//         break;
//     case '3':
//         echo 'Hari Selasa';
//         break;
//     case '4':
//         echo 'Hari Rabu';
//         break;

//     default:
//         echo ' Hari sudah kiamat';
//         break;
// }

$pilihan = 'simpan';

switch ($pilihan) {
    case 'tambah':
        echo 'Anda memilih menambah ';
        break;
    case 'ubah':
        echo 'Anda memilih mengubah ';
        break;
    case 'hapus':
        echo 'Anda memilih menghapus ';
        break;
    case 'kurang':
        echo 'Anda memilih mengurangi ';
        break;

    default:
        echo ' Pilihan belum ada';
        break;
}
