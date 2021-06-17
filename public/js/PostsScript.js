
//TextArea Editor
    ClassicEditor
    .create( document.querySelector( '#extract' ) )
    .catch( error => {
    console.error( error );
} );


    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
} );


    $(document).ready( function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });
});





