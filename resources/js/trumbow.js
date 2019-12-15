$.trumbowyg.svgPath = '/svg/icons.svg';
$('#trumbow').trumbowyg({
    btns: [
        ['upload']
    ],
    plugins: {
        upload: {
            serverPath: '/'
        }
    }
});
