$.trumbowyg.svgPath = '/svg/icons.svg';
$('#trumbow').trumbowyg({
    btns: [
        ['upload']
    ],
    plugins: {
        upload: {
            serverPath: '/api/upload',
            fileFieldName: 'image',
            urlPropertyName: "url",
        }
    }
});
