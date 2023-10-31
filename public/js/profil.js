document.getElementById("kepInput").addEventListener("change",function(event){
  const file=event.target.files[0];
  
  if (file){
    const profilkep = document.getElementById("profilkep");
    const read = new FileReader();
    read.onload = function(e){
      profilkep.src = e.target.result;
    }
    read.readAsDataURL(file);
  }
})