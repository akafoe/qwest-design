/*
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.addStylesSet( 'drupal',
    [
            /* Inline Styles */
            { name : 'Überschrift 4'      , element : 'h4' },
            { name : 'Überschrift 5'      , element : 'h5' },
            { name : 'Überschrift 6'	  , element : 'h6' },
            { name : 'Absatz'             , element : 'p' },
            { name : 'Beton'              , element : 'span', attributes : { 'class' : 'beton' } },
            { name : 'Blau'               , element : 'span', attributes : { 'class' : 'blau' } },
            { name : 'Orange'             , element : 'span', attributes : { 'class' : 'orange' } },
            { name : 'Red'                , element : 'span', attributes : { 'class' : 'red' } },
            { name : 'Stahl'              , element : 'span', attributes : { 'class' : 'stahl' } },
            { name : 'Weiß'               , element : 'span', attributes : { 'class' : 'white' } },
            { name : 'Großbuchstaben'     , element : 'span', attributes : { 'class' : 'uppercase' } },
            { name : 'Links ausgerichtet' , element : 'span', attributes : { 'class' : 't-left' } },
            { name : 'Rechts ausgerichtet', element : 'span', attributes : { 'class' : 't-right' } },
            /*{ name : 'Inhaltsstoffe'      , element : 'sup', },
            { name : 'Inhalt + Scharf'             , element : 'sup', attributes : { 'class' : 'icon icon-chili' } },
            { name : 'Inhalt + Veggie'             , element : 'sup', attributes : { 'class' : 'icon icon-veggie' } },
            { name : 'Inhalt + Veggie-Chili'       , element : 'sup', attributes : { 'class' : 'icon icon-veggie-chili' } },
            { name : 'Inhalt + Chili-Chili'        , element : 'sup', attributes : { 'class' : 'icon icon-chili-chili' } },*/
    ]);
}