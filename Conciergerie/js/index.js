window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

M.AutoInit();

function rechercher()
{
	var htmlCode = "";

    	 $("#Resultat").show();
}

$('input.autocomplete').autocomplete({
      data: {
        "Gucci": null,
        "Laurent": null,
        "Google": 'https://placehold.it/250x250'
      },
    });

   
function research(){
    $post(
        'traitementRecherche.php',
        {
            barre:$('#autocomplete-input').val(),
            change:$('#Change').val(),
            type:$('#Type').val(),
            marque:$('#Marque').val(),
            shop:$('#Shop').val()

        },
        function (data)
        {
            
        }
    );
}

function research(){
    $post(
        'barre.php',
        {
            

        },
        function (data)
        {
            var json = JSON.parse(data);
            var htmlCode = "";
            result = new Array(json.length);
            for (var i = 0; i < json.length; i ++) {
                htmlCode += '';
               // sounds[i] = json[i].urlSound;
            }
        }
    );
}