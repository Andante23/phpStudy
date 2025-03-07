document.addEventListener('DOMContentLoaded' , function(){

 const searchBox = document.querySelector('#table_search');


const tBodyInTable = document.querySelector('#table tbody');

 
  // 키업을 이용하여 검색할때마다 이벤트가 로드되게 하자 
   searchBox.addEventListener('keyup' , function(){
      
      //검색되는 값은 대소문자 유무 상관없음 
      const keyupSearchValue = searchBox.value.toLowerCase(); 

      // 테이블 tbody의  전체 tr 가져오기  
      const rows = tBodyInTable.querySelectorAll('tr');


      for(let i = 0; i< rows.length ; i++){
        let rowText = rows[i].textContent.toLowerCase();

        if(rowText.includes(keyupSearchValue)){
            rows[i].style.display = '';
        }else{
            rows[i].style.display = 'none';
        }
      }      
          


   } );



});