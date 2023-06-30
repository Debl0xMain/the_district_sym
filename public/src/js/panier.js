// window.onload = function () {
//     buttons = document.querySelectorAll(".addpanier");
//     console.log(buttons);
//     for (i = 0; i < buttons.length; i++) {
//         element = buttons[i];
//         //console.log(element);
//             if (buttons[i] == 1) {
//                 console.log(element)
//             }


//         element.addEventListener("click", addpanierajax);
//     }
// };

// for (var i = 0; i < elements.length; i++) {
//     if (elements[i].className == "addpanier") {
//         console.log(elements[i]);
//     }
// }



// const addpanierajax = (e) => {

//     e.preventDefault();

//     var id = $(this).data("id");
//     var qte = $(".addpanier").val();

//     $.ajax({
//         type: "POST",
//         url: "/panier",
//         data: {id: id,qte: qte},
//         success: function(data){
//             console.log(data);

//             //$('.panier').html(data[1]);
//         //         console.log(data);
//         //         $('.panier').html(`<pre>
//         //             {{ dump(${data} }}
//         //         </pre>`)

//         // alert("Article numero "+ id + "ajouté avec succes! Quantité:" + qte);
//     }
        
//     })

// }




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

                    $('.panier').html(data[1]);
                //         console.log(data);
                //         $('.panier').html(`<pre>
                //             {{ dump(${data} }}
                //         </pre>`)

                // alert("Article numero "+ id + "ajouté avec succes! Quantité:" + qte);
            }
                
            })
    
})

