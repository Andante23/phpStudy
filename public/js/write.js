 let warnResT = document.getElementById('warn_res_title');
      let warnResP = document.getElementById('warn_res');
      let content = document.getElementById('content');
      let title = document.getElementById('title');




         content.addEventListener("input",  function(){
          let convArr = content.value.split("");
          let res = "";
           if (convArr.length === 300) {
              res = "300글자이네요"; 
          } else {
              res = ""; 
          }
          let newBtag = document.createElement("b"); 
          newBtag.textContent = res;
          warnResP.innerHTML ='';
          warnResP.appendChild(newBtag);          
         }
);


         title.addEventListener("input",  function(){
          let convArr = title.value.split("");
          let res = "";
           if (convArr.length === 30) {
              res = "30글자이네요"; 
          } else {
              res = ""; 
          }
          let newBtag = document.createElement("b"); 
          newBtag.textContent = res;
          warnResT.innerHTML ='';
          warnResT.appendChild(newBtag);          
         }
);
     