require('./bootstrap');

require('alpinejs');

import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';


//style
import 'filepond/dist/filepond.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';


const inputElement = document.querySelector('.filepond');



FilePond.registerPlugin(
    FilePondPluginImagePreview,
);


const pond = FilePond.create(
    inputElement,
    {
        storeAsFile: true,
    }
);




//Cambiar Imagen
document.getElementById("file").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picture").setAttribute('src', event.target.result);
    };

    reader.readAsDataURL(file);
}
