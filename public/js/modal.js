$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(".Edit").on('click', function () {
    var id = $(this).data('id');
    $.ajax({
        url: "/admin/nasabah/edit/"+id,
        type: "GET",
        success: function (data) {
            $('#editModal').modal('show');
            $('#id').val(data[0].id);
            $('#no_rekening').val(data[0].no_rekening);
            $('#nama').val(data[0].nama);
            $('#nis').val(data[0].nis);
            $('#kelas').val(data[0].id_kelas);
            $('#jurusan').val(data[0].id_jurusan);
            $('#alamat').val(data[0].alamat);
            $('#status').val(data[0].status);
        }
    })
})
$(".editJurusan").on('click', function () {
    var id = $(this).data('id');
    $.ajax({
        url: "/admin/jurusan/edit/"+id,
        type: "GET",
        success: function (data) {
            $('#jurusanModal').modal('show');
            $('#id').val(data[0].id);
            $('#jurusans').val(data[0].jurusan);
        }
    })
})
$(".EditUser").on('click', function () {
    var id = $(this).data('id');
    $.ajax({
        url: "/admin/user/edit/"+id,
        type: "GET",
        success: function (data) {
            $('#editModal').modal('show');
            // console.log(data);
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
        }
    })

})
$(".EditUser").on('click', function () {
    var id = $(this).data('id');
    $.ajax({
        url: "/admin/user/edit/"+id,
        type: "GET",
        success: function (data) {
            $('#editModal').modal('show');
            // console.log(data);
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
        }
    })
})
$('select').on('change', function () {
    const result = $('#ceksaldo').attr('value');
    console.log(result);
})


