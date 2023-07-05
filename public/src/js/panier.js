
$(".addpanier").on('click',function(e){
    e.preventDefault();

            var id = $(this).data("id");
            var qte = $(".addpanier").val();
    
            $.ajax({
                type: "POST",
                url: "/panier",
                data: {id: id,qte: qte},
                success: function(data){

                    var total = [];
                    totalpanier = document.getElementById(`'.paniertotalinput`).value;
                    total.push(totalpanier);

                    const majtotalajaxadd = (qtevalue,id) => {
                        var newprix = data['qte']*data['prix'];
                        total.push(newprix);
                        $(`#qteselect${id} option[value="${qtevalue}"]`).prop('selected', true);
                        $('.panierprixt'+id).append(`Prix/t${newprix}`)
                        $('.paniertotal').append(`${majtotalajax()}`);
                        $('.paniertotal').append(`<input hidden class='paniertotalinput' value="${majtotalajax()}" readonly>`);
                        ajaxadd(qtevalue);
                    }

                    const majtotalajax = () =>{ total.reduce((add, value) => add + value);}

                        if (document.getElementById(`panierrow${id}`)) {

                                qtevalue = document.getElementById(`qteselect${id}`).value;
                                qtevalue++;

                                const ajaxadd = (qtevalue) => {
                                    $.ajax({
                                        type: "POST",
                                        url: "/panierqte",
                                        data: {qtevalue: qtevalue,idplat:id},
                                        success: function(data){
                                            console.log("qte add"+data);
                                    }})
                                }

                                if(qtevalue == '2'){
                                    majtotalajaxadd(qtevalue,id);
                                }
                                if(qtevalue == '3'){
                                    majtotalajaxadd(qtevalue,id);
                                }
                                if(qtevalue == '4'){
                                    majtotalajaxadd(qtevalue,id);
                                } 
                                if(qtevalue == '5'){
                                    majtotalajaxadd(qtevalue,id);
                                }
                                if(qtevalue == '6'){
                                    majtotalajaxadd(qtevalue,id);
                                } 
                                if(qtevalue == '7'){
                                    majtotalajaxadd(qtevalue,id);
                                } 
                                if(qtevalue == '8'){
                                    majtotalajaxadd(qtevalue,id);
                                } 
                                if(qtevalue == '9'){
                                    majtotalajaxadd(qtevalue,id);
                                } 
                        }

                    else {

                        var newprix = data['qte']*data['prix'];
                        total.push(newprix);
                        
                         console.log("ajout panier"+data["libelle"]);
                         
                         $('.panierbody').before(`<div class="row rows-col-4 panierrow${id}" id='panierrow${id}'></div>`);

                         $('.panierrow'+id).append(`<div class="col my-auto imgpaniercol${id}"></div>`);
                         $('.imgpaniercol'+id).append(`<img class="panierimg" src="src/img/plat/${data['image']}" alt="${data['image']}" height="32px" width="32px">`);
                         
                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierlibelle${id}"></div>`);
                         $('.panierlibelle'+id).append(`${data['libelle']}`);

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierprixu${id}"></div>`);
                         $('.panierprixu'+id).append(`Prix/u${data['prix']}`)

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierprixt${id}"></div>`);
                         $('.panierprixt'+id).append(`Prix/t${data['prix']}`)

                         $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierqte${id}"></div>`);
                         $('.panierqte'+id).append(`<select name="qteselect" id="qteselect${id}"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>`);

                        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierpaniersup${id}"></div>`);
                        $('.panierpaniersup'+id).append(`<button onclick="dlton(${id})" type="submit" class="btn deletepanierbtn" id='deletepanierbtn' data-id="${id}"><i class="fa-solid fa-trash"></i></button>`);
                    
                        $('.paniertotal').append(`${majtotalajax()}`);
                        $('.paniertotal').append(`<input hidden class='paniertotalinput' value="${majtotalajax()}" readonly>`);
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
            console.log("sup"+data);
            $('.panierrow'+iddelete).children().remove();
            $('.panierrow'+iddelete).remove();
            
    }})
 }

const writepanier = () => {

    const qtevaluemaj = (qtevalue,id) => {
        $(`#qteselect${id} option[value="${qtevalue}"]`).prop('selected', true);
        $('.panierprix'+id).append(`${newprix}`);
    }
                                                 
    console.log("tableau panier php ="+panier);

    var id = panier.id;
   console.log("id ="+id);

    var qtevalue = panier.qte;
    console.log('qte = '+qtevalue);

    var total = [];
    var prix = panier.prix;
    var newprix = prix*qtevalue;
    total.push(newprix);
    console.log("prix = "+prix);
    console.log("total = "+total);

    const majtotal = () =>{ total.reduce((add, value) => add + value);}
    console.log(majtotal());

    var img = panier.img;
    console.log("img = "+img);
    var image = panier.image;
    console.log("image = "+image);

    var panierjs = panier;
    console.log("tableau panier js ="+panierjs);

    var libelle = panier.libelle;
    console.log("libelle = "+libelle);


        console.log("ajout panier ajoute depuis le panier session"+libelle);
        
        $('.panierbody').before(`<div class="row rows-col-4 panierrow${id}" id='panierrow${id}'></div>`);

        $('.panierrow'+id).append(`<div class="col my-auto imgpaniercol${id}"></div>`);
        $('.imgpaniercol'+id).append(`<img class="panierimg" src="src/img/plat/${image}" alt="${image}" height="32px" width="32px">`);
        
        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierlibelle${id}"></div>`);
        $('.panierlibelle'+id).append(`${libelle}`);

        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierprixu${id}"></div>`);
        $('.panierprixu'+id).append(`prix/u${prix}`);

        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierprixt${id}"></div>`);
        $('.panierprixt'+id).append(`Prix/t${newprix}`);

        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierqte${id}"></div>`);
        $('.panierqte'+id).append(`<select name="qteselect" id="qteselect${id}"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>`);

        $('.panierrow'+id).append(`<div class="col my-auto col my-auto panierpaniersup${id}"></div>`);
        $('.panierpaniersup'+id).append(`<button onclick="dlton(${id})" type="submit" class="btn deletepanierbtn" id='deletepanierbtn' data-id="${id}"><i class="fa-solid fa-trash"></i></button>`);

        $('.paniertotal').append(`${majtotal()}`);
        $('.paniertotal').append(`<input hidden class='paniertotalinput' value="${majtotal()}" readonly>`);

               if(qtevalue == '2'){
                qtevaluemaj(qtevalue,id);
               }
               if(qtevalue == '3'){
                qtevaluemaj(qtevalue,id);
               }
               if(qtevalue == '4'){
                qtevaluemaj(qtevalue,id);   
               } 
               if(qtevalue == '5'){
                qtevaluemaj(qtevalue,id);
               }
               if(qtevalue == '6'){
                qtevaluemaj(qtevalue,id);
               } 
               if(qtevalue == '7'){
                qtevaluemaj(qtevalue,id);
               } 
               if(qtevalue == '8'){
                qtevaluemaj(qtevalue,id);
               } 
               if(qtevalue == '9'){
                qtevaluemaj(qtevalue,id);
               } 
          

}

//route valide cmd
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Service\MailService;

#[isGranted('ROLE_USER')]
#[Route('/commande', name: 'app_commande')]
public function panierajaxqte(Request $request): Response
    {
        $Panier = $this->PanierService->panier();

        return $this->render('page/commande.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $Panier
        ]);
    }

    //twig :
            <form action='{{path("app_sendcommande")}}' method='POST'>
            //affichage donne utilisateur
            {% if app.user %}


            {app.user.Nom}// modifable
            {app.user.adresse}//ajoute cp etc en input modif


            {% endif %}
            //affichage panier
            <div class="panierbody">
            </div>
            {% for panier in panier %}
            <script src="{{asset('src/js/panier.js')}}">writepanier();</script>
            {% endif %}
            </form>

//commande envoie

#[isGranted('ROLE_USER')]
#[Route('/sendcommande', name: 'app_sendcommande')]
public function panierajaxqte(Request $request,MailService $ms): Response
    {
        $Panier = $this->PanierService->panier();
        //resultat du post
        $ var = $request->request->get(' ');
        $infouser = $thisapp -> info user;

        //envoi ver service

        //send mail
        $ms->sendMail($expediteur, $destinataire, $sujet, $message);

        $expediteur = 'the_discrit@contact.fr';
        $destinataire = "emailclient"
        $sujet = "Commande n°".idcommande;
        $message = 

        //inscription base de donne


        return $this->render('page/commande.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $Panier
        ]);
        return $this->redirectToRoute('app_accueil');
    }
