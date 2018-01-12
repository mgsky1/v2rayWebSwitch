        flag = 0;
        $.ajax({  
          cache: true,   
          url:'logic.php',  
          async: true,  
          error: function(request) {   
               alert("Connection error");  
           },  
           success: function(data) {   
                 if(data == "NOT FOUND")
                 {
                    $("[name='my-checkbox']").bootstrapSwitch('state',false);
                    $('#info').html("Stopped");
                 }
                 else
                 {
                     $("[name='my-checkbox']").bootstrapSwitch('state');
                     $('#info').html("Running");
                     flag = 1;
                 }
               }  
            }); 

            $('input[name="my-checkbox"]').on('switchChange.bootstrapSwitch', function(event, state) {
                if(flag == 0 && state == false)
                {
                    flag++;
                    return;
                }
                if(state)
                {
                    $.ajax({  
                            cache: true,   
                            url:'startup.php',  
                            async: true,  
                            error: function(request) {
                                alert("Connection error");  
                            },  
                            success: function(data) {
                                if(data == "OK")
                                {
                                    $('#info').html("Running"); 
                                }             
                            }  
                        });
                }
                else
                {
                    $.ajax({  
                            cache: true,   
                            url:'shutdown.php',  
                            async: true,  
                            error: function(request) {
                                alert("Connection error");  
                            },  
                            success: function(data) {
                                if(data == "OK")
                                {
                                    $('#info').html("Stopped"); 
                                }               
                            }  
                        });
                }
            }); 