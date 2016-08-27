tinyMCE.init({
width: "100%",
height: "500",
mode : "exact",
mode : "textareas",
            setup : function(ed)
            {
                ed.onInit.add(function(ed)
                {
                ed.getBody().style.fontSize = '14px';
                });
            },
            
elements : "pasarkode",
theme : "advanced",
skin: "default",
relative_urls : false,

convert_urls : false,
plugins : "youtubeIframe,advcode,syntaxhl,pagebreak,style,layer,table,save,advhr,advimage,advlink,insertdatetime,preview,searchreplace,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave,print,media",

// Theme options
theme_advanced_buttons1 : "fontselect,fontsizeselect,forecolor,backcolor,|,bold,|,italic,|,underline,|,strikethrough,|,blockquote,|,justifyleft,|,justifycenter,|,justifyright,|,justifyfull,|,bullist,|,numlist,|,link,|,unlink",
//theme_advanced_buttons1 : "forecolor,|,backcolor,|,bold,|,italic,|,underline,|,strikethrough,|,blockquote,|,justifyleft,|,justifycenter,|,justifyright,|,justifyfull,|,bullist,|,numlist,|,link,|,unlink",
theme_advanced_buttons2 : "cut,copy,paste,|,image,inserttime,media,youtubeIframe,|,charmap,|,hr,|,undo,redo,|,replace,search,preview,|,sub,sup,|,pagebreak,|,nonbreaking,|,fullscreen,advcode,|,syntaxhl",
//theme_advanced_buttons2 : "cut,copy,paste,|,image,|,youtubeIframe,|,undo,|,redo,|,sub,|,sup,|,nonbreaking,|,fullscreen,preview,|,advcode",
//theme_advanced_buttons3 : "|,cut,copy,paste,|,advcode,|,syntaxhl",
theme_advanced_buttons3 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
file_browser_callback : 'openKCFinder',
theme_advanced_resizing : false
});


function openKCFinder(field_name, url, type, win) {
    tinyMCE.activeEditor.windowManager.open({
        //file: 'http://cms.bazisjakarta.id/views/default/assets/plugins/kcfinder/browse.php?opener=tinymce&type=' + type,
       file: '../application/views/cms/vendor/kcfinder/browse.php?opener=tinymce&type=' + type,
        title: 'KCFinder',
        width: 700, 
        height: 500,
        resizable: "yes",
        inline: true,
        close_previous: "no",
        popup_css: false
    }, {
        window: win,
        input: field_name
    });
    return false;
}