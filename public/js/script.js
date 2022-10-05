$(function(){

    $('.buttonTambahData').on('click', function(){
        $('#judulModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUpdate').on('click', function(){
        
        $('#judulModalLabel').html('Update Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-body form').attr('action', 'http://localhost/php/OOP-PHP/PHP-MVC/public/mahasiswa/ubah');
        const id =$(this).data('id');

        $.ajax({
            url: 'http://localhost/php/OOP-PHP/PHP-MVC/public/mahasiswa/getubah',
            data: {id:id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
        
    });

   
});