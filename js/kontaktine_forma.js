$(document).ready(function() {
    $("#contact_form").submit(function() {
        var name = $("#name").val(); //val() naudojama kad gauti informacja is formos
        var email = $("#email").val();
        var message = $("#message").val();
        var contact = $("#contact").val();
        $("#returnmessage").empty();

        if (name == '' || email == '' || contact == '') { //jeigu yra tusti laukeliai, prasome juuos uzpildyti
            alert("Uzpildykite trukstamus laukelius");
        } else {
            $.post("kontaktine_forma.php", { //loadin'a data is esamos db
                vardas: name,
                elpastas: email,
                zinute: message,
                kontaktas: contact
            }, function(data) {
                $("#returnmessage").append(data); // pridejimas informcijos i duomenu baze (append (data))
                 if (data == "Artimiausiu laiku su Jumis susisieksime.") {
                    $("#form")[0].reset(); // jei viskas uzpildyta teisingai, laukeliai pasidaro tusti
                 }
                alert("Artimiausiu laiku su Jumis susisieksime.");
            }).fail(function (){
                alert("Nepavyko issiusti.");
            });
        }
    });
});