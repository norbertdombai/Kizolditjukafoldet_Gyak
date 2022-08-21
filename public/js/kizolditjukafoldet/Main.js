
$(function(){
  new Urlapkezeles(); 
 
});


class Urlapkezeles{
 constructor(){
    const osztalyokApiVegpont='/osztalyok';
    const tevekenysegekApiVegpont ='/tevekenyseg';
    
    
    const tevekenysegekTomb = [];
     
    const token = $('meta[name="csrf-token"]').attr("content");
    const myAjax = new MyAjax(token);
  
    //*********TEVÉKENYSÉG ADATOK LEUGRÓ MENÜBE TÖLTÉSE
     myAjax.getAjax(tevekenysegekApiVegpont,tevekenysegekTomb,this.tevekenysegAdatokImport); 


} 
 

tevekenysegAdatokImport(tomb) {    
    tomb.forEach((element, index) => {      
            let option = new Option(element.nev, element.id); //NEW OPTION("OPTION TEXT", "VALUE");
            $("#tevekenysegek").append(option);                     
    });
    tomb.splice(0,tomb.length);  
}


}