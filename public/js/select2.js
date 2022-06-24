$('.select2-single-placeholder').select2({
    placeholder: "Pencarian..",
    allowClear: true,
    ajax: {
      url: '/admin/tabungan/nasabah',
      type: "GET",
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
                return {
                    text: item.no_rekening,
                    id: item.id
                }
            })
        };
      },
      cache: true
    } 
});