$(document).ready(function(){
//CKEDITOR
  ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        });
    
    $('#selectAllbox').click(function(event)){
    if(this.check){
        $('.checkBox').each(function(){
             this.checked= true;           
        });
    }else{
        $('.checkBox').each(function(){
            this.checked= false;
        });  
          }
                             }
});


