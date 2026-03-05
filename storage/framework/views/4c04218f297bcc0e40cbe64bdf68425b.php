 

<?php $__env->startSection('body-class', 'bg-kontak'); ?>
<?php $__env->startSection('content'); ?>
    <div class="py-4 text-white"> <h2 class="fw-bold border-bottom pb-2">Hubungi Saya</h2>
        <div class="row mt-4">
            <div class="col-md-5 mb-4">
                <p>Punya proyek atau lagi bangun sistem otomasi tapi butuh bantuan teknis? Saya bisa banget bantu dan kasih masukan untuk rencana baru kamu. Jangan sungkan buat kirim pesan di sebelah, mari kita lihat gimana keahlian mekatronika saya bisa jadi solusi buat ide-ide kamu.</p>
                <p><strong>Email:</strong> bagas12@gmail.com</p>
                <p><strong>Lokasi:</strong> Solo, Indonesia</p>
            </div>

            <div class="col-md-7">
                
                <div class="mb-3">
                    <label class="form-label small fw-bold text-white">Nama Lengkap</label>
                    <input type="text" id="nama" class="form-control rounded-0 border-white bg-transparent text-white" placeholder="Masukan Nama">
                </div>
                <div class="mb-3">
                    <label class="form-label small fw-bold text-white">Pesan</label>
                    <textarea id="pesan" class="form-control rounded-0 border-white bg-transparent text-white" rows="4" placeholder="Masukan Pesan"></textarea>
                </div>
                <button type="button" onclick="tampilPesan()" class="btn btn-outline-light w-100 rounded-0 fw-bold">
                    KIRIM PESAN SEKARANG
                </button>
            </div>
        </div>
    </div>

    <script>
        function tampilPesan() {
            var nama = document.getElementById('nama').value;
            if (nama == "") {
                alert("Mohon isi nama Anda terlebih dahulu.");
            } else {
                alert("Halo " + nama + "! Pesan berhasil terkirim.");
                document.getElementById('nama').value = "";
                document.getElementById('pesan').value = "";
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\bagashartanto.20236004\WEB_LARAVEL\todo-app\resources\views/kontak.blade.php ENDPATH**/ ?>