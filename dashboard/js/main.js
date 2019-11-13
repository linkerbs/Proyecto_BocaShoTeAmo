var height = screen.height;
document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();//inicializar todo el js
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {
      accordion:true
    });
  });
  
 