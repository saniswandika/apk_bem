<?php
  
    namespace App\enum;
    
    enum ProductStatusEnum:string {
        case belum_bayar = 'belum bayar';
        case konfirmasi_ulang = 'konfirmasi ulang';
        case berhasil = 'berhasil';
    }

?>