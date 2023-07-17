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
        console.log(isHovering)
    },[])


      function handleMouseEnter(i) {
        let tmp = [...isHovering]
        tmp[i] = !tmp[i]
        setIsHovering(tmp)
        console.log(tmp)
        // setIsHovering((prev) => {
        //   const next = [...prev];
        //   next[i] = true;
        //   return next;
        // });

      }
    
      function handleMouseLeave(i) {
        let tmp = [...isHovering]
        tmp[i] = !tmp[i]
        setIsHovering(tmp)
        console.log(tmp)
        // setIsHovering((prev) => {
        //   const next = [...prev];
        //   next[i] = false;
        //   return next;
        // });
      }

          
   
     return (
      //  // <div className='row my-1 mx-5 text-center row-cols-lg-3'>
            
            
      // <div>
      //           {/* categorie */}
      //           </div>
      //           {tableau.map((ligne) =>(
                  
      //           ))
      //           // plat
      //           {ligne["plats"].map((p)=>())}
      //           {isHovering.map((_, i) => (
      //                                    <button
      //                onMouseEnter={() => handleMouseEnter(i)}
      //                onMouseLeave={() => handleMouseLeave(i)}
      //              >OxxO</button>
      //           ))}
      //           {isHovering.map((v, i) => (
      //                         <p>
      //                           Hovering on {i}: {v.toString()}
      //                         </p>
      //           ))}
      // </div>




<div className='row my-1 mx-5 text-center row-cols-lg-3'>
        
 
      
            {
              tableau.map((ligne, i_ligne) =>(
                     
                <div key={i_ligne}>    
      
                  <button className='btn' onMouseEnter={() => handleMouseEnter(i_ligne)} onMouseLeave={() => handleMouseLeave(i_ligne)}
                              value={ligne['id']}
                  >
                          
                          <div className="boxcat">
                              <p className="catname">{ligne['libelle']}</p>
                             <img className="catbackground" src={'/src/img/category/' + ligne['image']} alt={ligne['libelle']} title={ligne['libelle']} height="255px" width="255px"></img>
                          </div>

                          <div className={isHovering[i_ligne]?'d-block':'d-none'}>

                              <div id={ligne['id']}>
                                  <h3>Overlay</h3>
                                  {ligne["plats"].map((p, i_p)=>(
                                        <div key={i_p}>
                                            {p.libelle} <br />
                                            prix = {p.prix} <br />
                                            image {p.image}
                                        </div>))}
                                </div>
      
                         </div>

                  </button>

                    
                      
                          
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
