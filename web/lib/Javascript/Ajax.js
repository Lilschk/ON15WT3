/**
 * Created by lilikovac on 19.11.16.
 */
$('#suchfeld').keyup(function() {

    if(this.value.length >=3){
        searchText = $(this).val();

        $.ajax({
            type: "POST",
            url: "/livesearch",
            dataType: "json",
            data: {searchText: searchText},
            success: function (response) {
                //console.log(response);
                var ausgabe = "<table class='table' >";

                for (var i = 0; i < response.length; i++) {
                    ausgabe += '<tr><td>' + response[i].name + '</td><td>' + response[i].mail +'</td><td>' + response[i].nachricht + '</td></tr>';

                }

                ausgabe += '</tr></table>';
                //console.log(ausgabe);


                var sucheinhalt = document.getElementById("sucheinhalt");
                sucheinhalt.innerHTML = ausgabe;

            }});}})