$(".addpanier").on('click',function(e){
    e.preventDefault();

            var id = $(this).data("id");
            var qte = $(".addpanier").val();
    
            $.ajax({
                type: "POST",
                url: "/_panier",
                data: {id: id,qte: qte},
                success: function(data){
                    console.log(data);

                    $('.panier').html(data[1]);
                         console.log(data);
                         $('.panier').html(`<pre>
                             {{ dump(${data} }}
                         </pre>`)

                 alert("Article numero "+ id + "ajouté avec succes! Quantité:" + qte);
            }
                
            })
    
 })