/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.filebrowserBrowseUrl = 'http://game.mangaplay.com/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = 'http://game.mangaplay.com/ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = 'http://game.mangaplay.com/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl = 'http://game.mangaplay.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = 'http://game.mangaplay.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = 'http://game.mangaplay.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
