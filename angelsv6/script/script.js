function alerte(){
    console.log("active");
    var elef =  document.getElementById('formu');
    var nom =  document.getElementById('nom').value;
    //var nom = ele.getAttribute("value");
    console.log(nom);
    var mail =  document.getElementById('mail').value;
    var mailverif= /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/.test(mail);
    //var mail = ele.getAttribute("value");
    var tel =  document.getElementById('tel').value;
    var telverif= /0{1}[0-9]{9}$/.test(tel);
    //var tel = ele.getAttribute("value");
    var sujet =  document.getElementById('sujet').value;
    //var sujet =  ele.getAttribute("value");
    if (nom==""){
        console.log("nom");
        window.alert("Le nom est vide !");
            
} 
else if (mail==""){
    window.alert("L'adresse mail est vide !");
        }
        else if (mailverif==false){
            window.alert("L'adresse mail n'est pas valide !");
                }
        else if (tel==""){
            window.alert("Le numéro de téléphone est vide !");
                }
                else if (telverif==false){
                    window.alert("Le numéro de téléphone n'est pas valide !");
                        }
                else if (sujet==""){
                    window.alert("Le sujet est vide !");
                        }else{
                            console.log("submit");
                            elef.submit();
                        }
}




function charge(){
    var temp =  document.getElementById('temp');
    op =temp.getAttribute('t');
     op = parseFloat(op);
     if (op<1){
    op=op+0.2;
    console.log("op="+op);
        }
    var cd1 =  document.getElementById('cd1');
    var cd2 =  document.getElementById('cd2');
    cd1.setAttribute("style", "width:140px;height:110px;opacity:"+op);
    cd2.setAttribute("style", "opacity:"+op);
    temp.setAttribute('t',op);
    return 0;
}
function charge2(){
    var temp =  document.getElementById('temp2');
    opb =temp.getAttribute('t2');
     opb = parseFloat(opb);
     if (opb<1){
    opb=opb+0.2;
    console.log("opb="+opb);
        }
    var de =  document.getElementById('de');
    var de2 =  document.getElementById('de2');
   
   de.style.opacity =opb;
   //de.style.transform= "translateX("+-(opb*500)+"px)";
   de2.style.opacity =opb;
  // de2.style.transform= "translateX("+opb*500+"px)";
    
    temp.setAttribute('t2',opb);
    return 0;
}
function charge3(){
    var temp =  document.getElementById('temp3');
    opc =temp.getAttribute('t3');
     opc = parseFloat(opc);
     if (opc<1){
    opc=opc+0.2;
    console.log("opc="+opc);
        }
    var de =  document.getElementById('de3');
   
   
   de3.style.opacity =opc;
 
    
    temp.setAttribute('t3',opc);
    return 0;
}
function navbar(){
        
    
 
  
    const mouseTarget3 = document.getElementById('de');
    const devimg= document.getElementById('dei');
    const fo= document.getElementById('fo');
    const mouseTarget4 = document.getElementById('dc0');
    const galimg= document.getElementById('gal');



mouseTarget3.addEventListener('mouseenter', e => {
    //mouseTarget3.setAttribute('style','background-color: #a88230;');
    mouseTarget3.style.backgroundColor ="#a88230"
    devimg.setAttribute('src','Images/devis2.png');
    fo.setAttribute('color','#ffffff');
    });
    
    mouseTarget3.addEventListener('mouseleave', e => {
       // mouseTarget3.setAttribute('style','background-color: #ffffff;');
        mouseTarget3.style.backgroundColor ="#ffffff"
        devimg.setAttribute('src','Images/devis.png');
       
        fo.setAttribute('color','#a88230');
    });
    window.addEventListener('scroll', function(){
        scrollvalue=(window.innerHeight+window.scrollY)/(this.document.body.offsetHeight);
        console.log("s="+scrollvalue);
      if(scrollvalue>0.45){
        var time2;
        time2= window.clearInterval();
        time2 = setInterval(function() {charge2()}, 150);
      }
      if(scrollvalue>0.6){
        var time3;
        time3= window.clearInterval();
        time2 = setInterval(function() {charge3()}, 150);
      }
    })
    mouseTarget4.addEventListener('mouseenter', e => {
        
        mouseTarget4.style.opacity="0.75";
        galimg.style.opacity="0.75";
        
        });
        
        mouseTarget4.addEventListener('mouseleave', e => {
            mouseTarget4.style.opacity="0.5";
            galimg.style.opacity="0.5";
        
         
        });;
    

}
function RedirectionJavascript(){
  
  if(screen.width<1000){
     
    document.location.href="index.php?uc=accueilm";     

}

}
