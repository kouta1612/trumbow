$('input[type=file]').on('change', () => {
    console.log($('#trumbow').trumbowyg('html'));
    $('#hidden').attr('value', $('#trumbow').trumbowyg('html'));
});
