//JQUERY VERIFICATION
$(document).ready(function()
{console.log("Jquery is loaded");});

//TINY MCE SETTINGS
tinymce.init({
    selector: "#articleEditor",
    plugins:
    [
        "save advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],

    toolbar: "save | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    save_onsavecallback: function()
    {
                                    console.log("Saving tinyMCE -- sending post data");
                                    var Notifzone =  $("#articleNotif");
                                    var saved = 'sauvegardé';
                                    var preview = $('#reponse');
                                    var articleTitle = $('#articleTitle').val();

                                    // ICI modifier les données envoyées a la page post.php !
                                    var posting = $.post("./php/processing/post.php",{articleauthor:"Admin",article:tinymce.activeEditor.getContent(),articletitle:articleTitle,articlesince:"00/00/0000",action:"newarticle"},function(data){console.log("Post data sent.")});
                                    posting.done(function(data)
                                                {
                                                    Notifzone.empty().append(saved).slideUp(0); //cacher la zone sauvegardé instant
                                                    Notifzone.slideDown(500);   //afficher smooth la zone 'sauvegardé'
                                                    setTimeout(function(){Notifzone.slideUp(500);} , 2500); //cacher après 2500ms la zone 'sauvegardé'
                                                    preview.empty().append(data);

                                                });
    }
});