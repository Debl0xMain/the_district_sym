$(".addpanier").on('click',function(e){
    e.preventDefault();

            var id = $(this).data("id");
            var qte = $(".addpanier").val();
    
            $.ajax({
                type: "POST",
                url: "/panier",
                data: {id: id,qte: qte},
                success: function(data){

                         console.log(data);
                         //$('.panierbody').append('col my-auto"></div>');
                         $('.panierbody').before(`<div class="row rows-col-4 panierrow${id}"></div>`);

                         $('.panierrow'+id).append(`<div class="col my-auto imgpaniercol${id}"></div>`);
                         $('.imgpaniercol'+id).append(`<img class="panierimg" src="src/img/plat/${data['image']}" alt="${data['image']}" height="32px" width="32px">`);
                         
                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierlibelle${id}"></div>`);
                         $('.panierlibelle'+id).append(`${data['libelle']}`);

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierprix${id}"></div>`);
                         $('.panierprix'+id).append(`${data['prix']}`);

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierqte${id}"></div>`);
                         $('.panierqte'+id).append(' <select name="qteselect" id="qteselect"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>');

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierpaniersup${id}"></div>`);
                        $('.panierpaniersup'+id).append(`<button onclick="dlton(${id})" type="submit" class="btn deletepanierbtn" id='deletepanierbtn' data-id="${id}"><i class="fa-solid fa-trash"></i></button>`);

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
            console.log(data);
            $('.panierrow'+iddelete).children().remove();
            $('.panierrow'+iddelete).remove();
            
    }})
 }
