
    (function(){

    jQuery(".next").click(function(){
        jQuery(".step1").css("display", "none");
        jQuery(".step2").css("display", "block");
    });

    jQuery(".login").click(function(){
    
        var username = jQuery(".username").val();
        var password = jQuery(".password").val(); 

        jQuery.ajax({
              type: 'POST',
              dataType: 'text',
              url: "ajax-auth.php",
              data: {
                'action': 'breached',
                'password': password
              },
              success: function (data) {
                console.log(jQuery(".message"));
                data = JSON.parse(data);
                jQuery(".message").text(data.message);
                
                if(!data.breached){
                  jQuery.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: "ajax-auth.php",
                        data: {
                          'action': 'login', 
                          'password': password,
                          'username': username,
                        },
                        success: function (data) {
                          console.log(data);
                          jQuery(".message").text(data.message)
                        }
                    });                
                }
                
              }
        });              
   

    });    
    
    jQuery(".step1").css("display", "block");
       
    })();