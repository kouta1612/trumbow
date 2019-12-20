$('#image').on('change', () => {
    let data = new FormData();
    data.append('image', $('#image')[0].files[0]);
    data.append('trumbow', $('#trumbow').trumbowyg('html'));
    $.ajax({
        url: '/api/upload',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data,
        type: 'POST',
        cache: false,
        dataType: 'json',
        contentType: false,
        processData: false
    });
});
