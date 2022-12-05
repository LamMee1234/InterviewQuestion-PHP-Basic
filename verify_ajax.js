function postValue(){
    
    var username = $('#username').val();
// Declare Variable
   
    if(!username)
    {   
        label.innerHTML = "Key in username and click submit";
        label.style.color = "green";
        //If data entered is empty
        return false;
    }
    else
    {   
        //To pass data username to info.php
        $.post('info.php',{username_php:username},
        function(data){
    
            $('#label').html(data);
            
            
            if(data =="1"){
                $('#label').html("Verified");
                label.style.color = "green";
                //When data is true change label to verified
            }
            else 
            {
                $('#label').html("Error");
                label.style.color = "red";
                //When data is false change label to red colour "Error"
            }
    
        });
        
        return true;
    }
  

}


