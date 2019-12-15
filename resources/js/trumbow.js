$.trumbowyg.svgPath = '/svg/icons.svg';
$('#trumbow').trumbowyg({
    btns: [
        ['upload']
    ],
    plugins: {
        upload: {
            serverPath: '/api/upload',
            fileFieldName: 'image',
            success: function () {
                $('.success').html("upload success");
            },
            error: function () {
                $('.error').html("upload error");
            }
        }
    }
});
