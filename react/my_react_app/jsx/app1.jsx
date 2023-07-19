import { func } from 'prop-types';
import * as React from 'react';
import  {useEffect,useRef, useState } from "react";

const Api = () => {
    const [tableau, setTableau] = useState([])
    const [isHovering, setIsHovering] = useState( [false, false, false, false, false, false, false, false]);

    useEffect(()=>{
        const url = 'https://127.0.0.1:8000/api/categories?page=1';
        
        fetch(url)
        .then((resp) => resp.json())
        .then(function(data) {
            setTableau(data['hydra:member'])
        })
        //console.log(isHovering)
    },[])


      function handleMouseEnter(i) {
        let tmp = [...isHovering]
        tmp[i] = !tmp[i]
        setIsHovering(tmp)
        //console.log(tmp)
      }
    
      function handleMouseLeave(i) {
        let tmp = [...isHovering]
        tmp[i] = !tmp[i]
        setIsHovering(tmp)
        //console.log(tmp)

      }
      const zmoin = {
        zIndex: "2",
      };
      const zplus = {
        zIndex: "50",
      };

      function handleClickEnter(e){
        console.log("enter " + e.target.id)
        console.log(e.target.id)
        var test = e.target.id
        var parent = document.getElementById(test);
        document.getElementById(test).style.zIndex = "30";
        // zplus;

      }
      function handleClickLeave(e){
        console.log("leave " + e.target.id)
        console.log(e.target.id)
        var test = e.target.id
        //document.getElementById(test).hidden = false

      }
      
     return (
      




<div className='row my-1 mx-5 text-center row-cols-lg-3'>
        
 
      
            {
              tableau.map((ligne, i_ligne) =>(
                     
                <div key={i_ligne}>    
                  {/*  onMouseEnter={() => handleMouseEnter(i_ligne)} onMouseLeave={() => handleMouseLeave(i_ligne)} */}

                  <button className='btn z-50' onClick={() => handleMouseEnter(i_ligne)}
                              value={ligne['id']}
                  >
                    <div className='testcatbox'>
                          <div className="boxcat">
                              <p className="catname">{ligne['libelle']}</p>
                             <img className="catbackground" src={'/src/img/category/' + ligne['image']} alt={ligne['libelle']} title={ligne['libelle']} height="255px" width="255px"></img>
                          </div>
                    </div>

                  </button>

                                            <div className={isHovering[i_ligne]?'d-block':'d-none'}>

                              <div id={ligne['id']} className='row my-1 mx-5 text-center row-cols-lg-3'>
                                  {ligne["plats"].map((p, i_p)=>(
                                        <div key={i_p}>
                                          <div>
                                                    
                                                      
<button className="btn" id={p.id} data-bs-toggle="modal" data-bs-target={"#modal" + p.id} onMouseEnter={handleClickEnter} onMouseLeave={handleClickLeave}>
                                                                  <div className="testcatbox">
                                                                          <img className="catbackground" src={'src/img/plat/' + p.image}
                                                                              alt={p.libelle}
                                                                              title={p.libelle} height="255px" width="255px"/>
                                                                          <p className="catreact">{p.libelle}</p>
                                                                          <p className="catreact">{p.prix}</p>
                                                                          <input type="hidden" value={p.id} name="cat"/>
                                                                  </div>
                                                  </button>
                                                  
                                                  <div className="btnaddshop">
                                                    <button className="btn btn-outline-light btnaddsubmit addpanier" title="Ajouté au panier" data-id={p.id} value="1">
                                                    <i className="fa-solid fa-cart-plus"></i>
                                                    </button>
                                                  </div>
                                            </div>
                                          
                                          <div className="modal fade" id={"modal" + p.id} data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby={"modal" + p.id } aria-hidden="true">
                                            <div className="modal-dialog">
                                              <div className="modal-content modalaffcss ">
                                                <div className="modal-header">
                                                  <h1 className="modal-title fs-5"><p className="libellemv ">{ p.libelle }</p></h1>
                                                  <button  className="btn-close" data-bs-dismiss="modal" aria-label="Close"/>
                                                </div>
                                                <div className="modal-body">
                                                      <img className="catbackground" src={"src/img/plat/" + p.image }
                                                                      alt={ p.libelle }
                                                                      title={ p.libelle } height="255px" width="255px"/>
                                                                
                                                                  <input type="hidden" value={ p.id } name="cat"/>
                                                      <p className="descmodal">Description : { p.libelle }</p>
                                                      <p className="descmodal">Prix : { p.prix }</p>
                                                </div>
                                                <div className="modal-footer">
                                                  <button className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          
                                        </div>))}
                                </div>
      
                         </div>
        
                </div>
                
                ))
              }
          </div>






        )
                   
     
}

export default Api;



{/* // return (
//     <div className='row my-1 mx-5 text-center row-cols-lg-3'>
        
//         { */}

//             tableau.map((ligne, i_ligne) =>(
//                 {isHovering.map((_, i) => ())}
//                 {isHovering.map((v, i) => ())}
//                 <div>    

//                     //     <button className='btn' onMouseEnter={() => handleMouseEnter(i)} onMouseLeave={() => handleMouseLeave(i)}
//                     //     value={ligne['id']}>
                    
//                     // <div className="boxcat">
//                     //     <p className="catname">{ligne['libelle']}</p>
//                     //    <img className="catbackground" src={'/src/img/category/' + ligne['image']} alt={ligne['libelle']} title={ligne['libelle']} height="255px" width="255px"></img>
//                     // </div>
//                     // </button>
//                     <button
//                     onMouseEnter={() => handleMouseEnter(i_ligne)}
//                     onMouseLeave={() => handleMouseLeave(i_ligne)}
//                   >OO</button>

//                     {isHovering.map((v, i) => (
//                                 <p>
//                                 Hovering on {i}: {v.toString()}
//                               </p>
//                         // <div id={ligne['id']}>
//                         //     <h3>Overlay</h3>
//                         //     {ligne["plats"].map((p)=>(
//                         //         <div hidden>
//                         //             {p.libelle} <br />
//                         //             prix = {p.prix} <br />
//                         //             image {p.image}
//                         //         </div>))}
//                         // </div>
//                     ))}

                
                    
//                 </div>
//             ))
//         }
//     </div>
//  )
