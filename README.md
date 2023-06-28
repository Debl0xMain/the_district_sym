# the_district_sym

controler = 
 /**
 * @Route("_panier/{id}")
 *
 */
public function AddPanier(Request $request,$id)
{
    $session = $request->getSession();

    if(!$session->has('panier')) $session->set('panier',array());
    $panier = $session->get('panier');
   // var_dump($request->query->get('qte'));die();

    if(array_key_exists($id,$panier)){
        if($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
        //$msg = "Quantité ajouté avec succes";

       // $this->addFlash('reussite','Quantité modifié avec succes !');
    }
    else{
        if($request->query->get('qte') != null){
            $panier[$id] = $request->query->get('qte');
        }else{
            $panier[$id] = 1;

        }
        //$msg = "Article ajouté avec succes";
      // $this->addFlash('reussite','Article ajouté avec succes !');
    }
    $session->set('panier',$panier);
    //die($request->query->get('qte'));

    return new  Response(json_encode($panier));
    }

    Js = 

<div class="btnaddshop">
    <form action="./src/php/shoping/formshopping.php" method="POST">
            <input hidden name="idplatform" type="text" value="{{ plat.id }}">
            <button type="submit" class="btn btn-outline-light btnaddsubmit" title="Ajouté au panier">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
    </form>
</div> 

$(".btnaddsubmit").on('click',function(e){
e.preventDefault();


        var id = $(".addshopid").val();
        var qte = $(".addshopqte").name();

        $.ajax({
            type: "GET",
            url: "page/_panier/"+id,
            data: qte,
            success: function(){
            alert("Article numero "+ id + "ajouté avec succes! Quantité:" + qte);}
        })

})

html = 
<div class="btnaddshop">
    <form action="./src/php/shoping/formshopping.php" method="POST">
            <input hidden name="idplatform" type="text" value="{{ plat.id }}">
            <button type="submit" class="btn btn-outline-light btnaddsubmit" title="Ajouté au panier">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
    </form>
</div> 
    
