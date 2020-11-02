
$(document).ready(function(){

$('#testpc').click(function(){
    if($(this).is(":checked")){
        $("#pcform").show();
    }
    else if($(this).is(":not(:checked)")){
        $("#pcform").hide();
    }
});

$('#testecran').click(function(){
    if($(this).is(":checked")){
        $("#ecranform").show();
    }
    else if($(this).is(":not(:checked)")){
        $("#ecranform").hide();
    }
});

$('#testsouris').click(function(){
    if($(this).is(":checked")){
        $("#sourisform").show();
        
    }
    else if($(this).is(":not(:checked)")){
        $("#sourisform").hide();
    }
});

$('#testcasque').click(function(){
    if($(this).is(":checked")){
        $("#casqueform").show();
        
    }
    else if($(this).is(":not(:checked)")){
        $("#casqueform").hide();
    }
});

$('#testclavier').click(function(){
    if($(this).is(":checked")){
        $("#clavierform").show();
        
    }
    else if($(this).is(":not(:checked)")){
        $("#clavierform").hide();
    }
});

$('#testbase').click(function(){
    if($(this).is(":checked")){
        $("#baseform").show();
    }
    else if($(this).is(":not(:checked)")){
        $("#baseform").hide();
    }
});

$('#testpieuvre').click(function(){
    if($(this).is(":checked")){
        $("#pieuvreform").show();
        
    }
    else if($(this).is(":not(:checked)")){
        $("#pieuvreform").hide();
    }
});


  $("#ajouterecran").click(function(){
    $("#unecran").clone().appendTo("#listecran");
  });


});



    





    


    
    
