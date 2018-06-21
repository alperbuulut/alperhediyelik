$(document).ready(function () {
    // Open Editor When Clicked To Input
    $('.openEditor').click(function () {
        resetInputActive($(this));
    });

    // Add Item To List Button
    $('.addItem').click(function () {
        var text = getValueOfTextarea($(this));
        if(text['value'] != ''){
            textTransferToList(text['value'], text['name'], $(this));
        }
    });

    $(document).on('click', '.removeItem', function () {
       removeFromList($(this));
    });

    function getValueOfTextarea(item) {
        tinyMCE.triggerSave();

        var data = [];
        data["value"] = $(item).closest('.addNewItem').find('textarea').val();
        data["name"] = $(item).closest('.addNewItem').find('textarea').attr("data-name");

        return data;
    }

    function textTransferToList(text, name, item){
        $(item).closest('.heading-title-alt').find('ul').append('<li><span class="removeItem"></span><input type="hidden" name="' + name + '" value="' + text + '">'+ text +'</li>');
        tinymce.activeEditor.setContent('');
    }

    function removeFromList(item){
        $(item).parent().remove();
    }

    function resetInputActive(item) {
        // Delete Active Class From All Editors
        $('.mce-tinymce').each(function () {
            $(this).removeClass('active');
        });

        // Hide All Add Buttons
        $('.addButton').each(function () {
            $(this).removeClass('active');
        });

        // Add Active Class To All Text Inputs
        $('.openEditor').each(function () {
            $(this).addClass('active');
        });


        $(item).closest('.addNewItem').find('.mce-tinymce').addClass('active');
        $(item).closest('.addNewItem').find('.addButton').addClass('active');
        $(item).closest('.addNewItem').find('.openEditor').removeClass('active');
    }
});
