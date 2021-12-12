
 $('#addform').submit(function () {

    var form = $('#addform')[0];
    var formData = new FormData(form);
    event.preventDefault(); //zaustavi refresovanje na stranici
    console.log("Dodaj je pokrenuto");



   // const $form = $(this);//this se odnosi na formu #add form
   /// const $input = $form.find('input,select,button,textarea');
   /// const serijalizacija = $form.serialize(); //serijalizujemo podatke iz forme i saljemo ih nasem postu
   // console.log(serijalizacija); 

    //$input.prop('disabled', true); //na sve inpute postavljamo property da onemogucimo da korisnik menja ono sto je uneo dok se ne zavrsi ubacivanje u tabelu

      



    request = $.ajax({  
        url: 'handler/insert.php',  
        type: 'post',
       
        //data: serijalizacija
        processData: false,
        contentType: false,
        data: formData
    });

    request.done(function (response, textStatus, jqXHR) {
        console.log(textStatus);
        console.log(jqXHR);
      console.log(response);

        if (response === "Success") {
            alert("Odeca dodata");
            console.log("Uspesno dodavanje");
            location.reload(true);
        }
        else {
       
            console.log("Odeca nije dodata" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
}); 








function prikaziOdecu(prikazid){
   // alert(prikazid);

    $.post("handler/get.php",{prikazid:prikazid},function(data,status){
      // console.log(data);
      //  console.log(status);
        var odecaid=JSON.parse(data);//uzimamo podatke i parsisamo ih u JSON
                //uzimamo podatke iz baze i cuvamo ih u input field
         
        
        $('#nazivPreview').text("   " + odecaid.naziv  );
        $('#descriptionPreview').text("   " +  odecaid.opis);
        $('#pricePreview').text("   " +  odecaid.cena);

        document.getElementById("IMG").src = 'images/'+odecaid.slika;


    });

}