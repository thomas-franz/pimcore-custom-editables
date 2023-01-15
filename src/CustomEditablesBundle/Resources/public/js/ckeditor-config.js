const customConfig = {
    allowedContent: true,
    skin: "flat",
    uiColor: '#dcdcdc',
    toolbar: 'MainWysiwyg',
    toolbar_MainWysiwyg: [
        {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
        {name: 'paragraph',items: ['NumberedList','-', 'BulletedList', '-', 'Outdent','-', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']},
        {name: 'colors', items: ['TextColor', 'BGColor']},
        '/',
        {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
        {name: 'insert',items: ['Table','-', 'HorizontalRule','-','SpecialChar', '-','PageBreak']},
        {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
        {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll']},
        '/',
        {name: 'styles', items: ['Styles','-', 'Format']},
        {name: 'document', items: ['Templates', '-', 'Sourcedialog']},
    ],
    toolbar_BasicWysiwyg: [
        {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
        {name: 'paragraph',items: ['NumberedList','-', 'BulletedList', '-', 'Outdent','-', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']},
    ],
    stylesSet:[
        {
            name: 'P Class (right)',
            element: 'p',
            attributes: {
                class: 'right' }
        },
        {
            name: 'Compact Table',
            element: 'table',
            attributes: {
                class: 'table',
            }
        },

    ],
};


    pimcore.document.editables.wysiwyg.defaultEditorConfig =
        pimcore.document.editables.wysiwyg.defaultEditorConfig || customConfig;





