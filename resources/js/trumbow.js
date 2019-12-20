$.trumbowyg.svgPath = '/svg/icons.svg';
$('#trumbow').trumbowyg({
    btns: [
        ['upload']
    ],
    plugins: {
        upload: {
            serverPath: '/api/trumbow/upload',
            fileFieldName: 'image',
            data: [
                { name: 'trumbowyg', value: $('#trumbow').trumbowyg('html') },
                // { name: 'test', value: $('form').serialize() },
                { name: 'key', value: 'value' }
            ],
            headers:  {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            urlPropertyName: "url",
        }
    }
});
