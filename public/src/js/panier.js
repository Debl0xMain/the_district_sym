

$(".addpanier").on('click',function(e){
    e.preventDefault();

            var id = $(this).data("id");
            var qte = $(".addpanier").val();

                        //post quantie et id ajax
                        $.ajax({
                            type: "POST",
                            url: "/panier",
                            data: {id: id,qte: qte},
                            success: function(data){
                                
                                //ajoute le prix au panier pour un qte ajoute
                                const majtotalajaxadd = (qtevalue,id) => {
                                    let prix = parseFloat(data[id]['prix'])
                                    let newprix = qtevalue * prix;
                                    //total.push(prix);
                                    
                                    $(`#qteselect${id} option[value="${qtevalue}"]`).prop('selected', true);
                                    $('.panierprixt'+id).replaceWith(`<div class="col my-auto col my-auto panierprixt${id}"> Prix/t ${newprix} </div>`)
                                
    //qte ajout en js mais pas dans la session panier []

                                    //envoi une requet ajax pour gere la quantite
                                    const ajaxadd = (qtevalue) => {
                                        $.ajax({
                                            type: "POST",
                                            url: "/panierqte",
                                            data: {qteadd: qtevalue,id:id},
                                            success: function(data){
                                        }})
                                    }
                                    ajaxadd(qtevalue);
                                }

                                //fonctionne pas , total du panier

                                                            const totaladd = (id) => {

                                                                    var newprix = data[id]['qte'] * data[id]['prix'];

                                                                    //recup prix total panier
                                                                    var recup_valeur_input_html = $('#recupvaleur').val();
                                                                    //verif que la valeur n'est pas null
                                                                    if(recup_valeur_input_html == undefined || recup_valeur_input_html == 0 || recup_valeur_input_html == null){
                                                                      recup_valeur_input_html = 0;
                                                                    }
                                                                    var prix_total_panier = newprix + parseFloat(recup_valeur_input_html);
                                                                    $('.paniertotal').replaceWith(`<div class="paniertotal">${prix_total_panier}</div>`);
                                                                    $('.paniertotal').append(`<input type='text' hidden class='paniertotalinput' id='recupvaleur' value="${prix_total_panier}" readonly>`);
                                                                 }

                        if (document.getElementById(`panierrow${id}`)) {

                                qtevalue = $(`#qteselect${id}`).val();
                                qtevalue++;

                                if(qtevalue == '2'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                }
                                if(qtevalue == '3'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                }
                                if(qtevalue == '4'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                } 
                                if(qtevalue == '5'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                }
                                if(qtevalue == '6'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                } 
                                if(qtevalue == '7'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                } 
                                if(qtevalue == '8'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                } 
                                if(qtevalue == '9'){
                                    majtotalajaxadd(qtevalue,id);
                                    totaladd(id);
                                }
                        }
                    else {
                        
                        totaladd(id);

                         $('.panierbody').append(`<div class="row rows-col-4 panierrow${id}" id='panierrow${id}'></div>`);

                         $('.panierrow'+id).append(`<div class="col my-auto imgpaniercol${id}"></div>`);
                         $('.imgpaniercol'+id).append(`<img class="panierimg" src="src/img/plat/${data[id]['img']}" alt="${data[id]['img']}" height="32px" width="32px">`);
                         
                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierlibelle${id}"></div>`);
                         $('.panierlibelle'+id).append(`${data[id]['libelle']}`);

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierprixu${id}"></div>`);
                         $('.panierprixu'+id).append(`Prix/u ${data[id]['prix']}`)

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierprixt${id}"></div>`);

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierqte${id}"></div>`);
                         $('.panierqte'+id).append(`<select name="${id}" class="changeqte" id="qteselect${id}"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>`);

                        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierpaniersup${id}"></div>`);
                        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierpaniersup${id}"></div>`);
                        $('.panierpaniersup'+id).append(`<button onclick="dlton(${id})" type="submit" class="btn deletepanierbtn" id='deletepanierbtn' data-id="${id}"><i class="fa-solid fa-trash"></i></button>`);
                    
                    }

            }   
            })
 })

 const dlton = (id) => {

    var iddelete = id;

    $.ajax({
        type: "POST",
        url: "/panierdelete",
        data: {iddelete: iddelete},
        success: function(data){
            $('.panierrow'+iddelete).children().remove();
            $('.panierrow'+iddelete).remove();

            var newprix = data['qte'] * data['prix'];

            //recup prix total panier
            var recup_valeur_input_html = $('#recupvaleur').val();
            //verif que la valeur n'est pas null
            if(recup_valeur_input_html == undefined || recup_valeur_input_html == 0 || recup_valeur_input_html == null){
              recup_valeur_input_html = 0;
            }

            if (parseFloat(recup_valeur_input_html) >= newprix){ var prix_total_panier = parseFloat(recup_valeur_input_html) - newprix;}
            if (parseFloat(recup_valeur_input_html) < newprix){var prix_total_panier =parseFloat(recup_valeur_input_html) -  newprix;}


            $('.paniertotal').replaceWith(`<div class="paniertotal">${prix_total_panier}</div>`);
            $('.paniertotal').append(`<input type='text' hidden class='paniertotalinput' id='recupvaleur' value="${prix_total_panier}" readonly>`);



            
    }})
 }

const dltonalll = () => {
    $.ajax({
        type: "POST",
        url: "/panierdeleteall",
        data: {},
        success: function(data){
            $('.panierbody').children().remove();
            $('.panierbody').remove();
            $('.paniertotal').replaceWith(`<div class="paniertotal">${0}</div>`);
            $('.paniertotal').append(`<input type='text' hidden class='paniertotalinput' id='recupvaleur' value="${0}" readonly>`);

    }})
 }








 $(`.changeqte`).on('focusin', function(){
    $(this).data('val', $(this).val());
});

 $( document ).on( "change", `.changeqte`, function() {
    var ancien_qte = $(this).data('val');
    var id= $(this).attr('name');
    var qte = $(this).val();


    //ajax
        $.ajax({
            type: "POST",
            url: "/panierqte",
            data: {qteadd: qte,id:id},
            success: function(data){
                console.log(data[id])

                            var ancien_prix = ancien_qte * data[id]['prix'];

                            var newprix = data[id]['qte'] * data[id]['prix'];
                            $('.panierprixt'+id).replaceWith(`<div class="col my-auto col my-auto panierprixt${id}"> Prix/t ${newprix} </div>`)

                            //recup prix total panier
                            var recup_valeur_input_html = $('#recupvaleur').val();
                            //verif que la valeur n'est pas null
                            if(recup_valeur_input_html == undefined || recup_valeur_input_html == 0 || recup_valeur_input_html == null){
                            recup_valeur_input_html = 0;
                            }

                                var recup_valeur_input_html_moin_ancien_prix = parseFloat(recup_valeur_input_html) - ancien_prix
                                var prix_total_panier = parseFloat(recup_valeur_input_html_moin_ancien_prix) + newprix
                                console.log('ancien quantite sup ')

                            $('.paniertotal').replaceWith(`<div class="paniertotal">${prix_total_panier}</div>`);
                            $('.paniertotal').append(`<input type='text' hidden class='paniertotalinput' id='recupvaleur' value="${prix_total_panier}" readonly>`);
                
                    }
        })
 });
