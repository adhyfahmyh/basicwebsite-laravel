/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

   
// CKEDITOR.replace( 'editor' );

// ClassicEditor
//     .create( document.querySelector( '#editor' ), 
//         { 
//             image: {
//                 toolbar: [ 'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight' ],
//                 styles: [
//                     // This option is equal to a situation where no style is applied.
//                     'full',
//                     // This represents an image aligned to the left.
//                     'alignLeft',
//                     // This represents an image aligned to the right.
//                     'alignRight'
//                 ]
//             },
//             cloudServices: {
//                 tokenUrl: 'https://42726.cke-cs.com/token/dev/dgdVlCXCJ8gHWrPA4KkzlwloJkHrpQTGBbl0h0B8BzelvnaxNuSA7urKZo6s',
//                 uploadUrl: 'https://42726.cke-cs.com/easyimage/upload/'
//             }
//         } 
//     )
    
//     .then( newEditor => {
//         console.log( 'Editor was initialized', editor );
//     } )
//     .catch( error => {
//         console.error( error );
//     } );

var config = {};
config.placeholder = 'somevalue';
CKEDITOR.replace('editor', config);

