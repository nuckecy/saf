$(document).ready(function() {
    $('#feedbackform').submit(function(e){
         // Prevent form submission
         e.preventDefault();
         formSubmit();
    })
    function formSubmit()
    {
       
        // Get the form instance
        var $form = $('#feedbackform');

        // Use Ajax to submit form data
        var url = 'https://script.google.com/macros/s/AKfycbwliFiF4_HbBt97lGU5YehIZL_jKjT4pW8nsAzjdHv1RJ3UAJw/exec';

        // show the loading 
        // $('#postForm').prepend($('<span>Congrats</span>').addClass('glyphicon glyphicon-refresh glyphicon-refresh-animate'));
        var jqxhr = $.get(url, $form.serialize(), function(data) 
        {
            jqxhr.crossDomain = true;
            // console.log("Success! Data: " + data.statusText);
            document.getElementById('heading-2').style.display = 'none';
            document.getElementById('text-block').style.display = 'none';
            document.getElementById('feedbackform').style.display = 'none';
            document.getElementById('heading-success').style.display = 'block';
            document.getElementById('status').style.display = 'block';
        })
        .fail(function(data) {

        });
    };
});