
function search() {
   
    const searchTerm = document.getElementById("searchInput").value.toLowerCase();

   
    if (searchTerm.includes("madrid")) {
        Madrid();
    } else if (searchTerm.includes("milan")){
        Milan();
       
    }else if(searchTerm.includes("united")){
        United();
    }
    else{
        alert("Can't find what your looking for");
    }
}

function Madrid(){  
    document.getElementById("image").src= "images/Madrid.jpg"
}
function Milan(){
    document.getElementById("image").src= "images/milan2.jpg"

}
function United(){
    document.getElementById("image").src= "images/United.jpg"

}
