const AddPanier = () => {

    alert('Ajout');

    $.ajax({

        url: 'test',
        dataType: 'text',

        error: function(){
            alert('Error');
        },

        success: function(){
            alert('Work');
        }
    });
}

$('#loadplats').on('click',AddPanier);