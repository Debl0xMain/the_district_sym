
// $(".btnaddsubmit").on('click',function(e){ e.preventDefault();

//     var id = $(".addshopid").val();
//     var qte = $(".addshopqte").val();
    
//     $.ajax({
//         type: "GET",
//         url: "_panier",
//         success: function(){
//         alert("Plat numero "+ id + "ajouté qte ajout:" + qte);}
//     })
// })

    $(function() {
      $(".btnaddsubmit").click(function(e){
      e.preventDefault() ;
 
     let id = $(".addshopid").val();
     let qte = $(".addshopqte").val();

        $.post({
          url: "/_panier",
          data: id + qte,
          success: onSuccess,
          error: onError,
        });
      });
 
    });
    function onSuccess(data) {
			console.log('Request OK');
            console.log(data);
    }
    function onError() {
      alert('Une erreur a été détectée');
    }
