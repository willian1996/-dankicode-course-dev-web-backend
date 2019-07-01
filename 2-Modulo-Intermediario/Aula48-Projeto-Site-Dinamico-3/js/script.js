$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        
        /* ABRIR E FECHAR MENU COM DO fadeIn();
        
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        }
        */
        
        // ABRIR E FECHAR MENU COM toogle();
        
        
        /* ABRIR E FECHAR SEM EFEITOS
        if(listaMenu.is(':hidden') == true){
            //listaMenu.show();
            listaMenu.css('display', 'block')
        }else{
            //listaMenu.hide();
        listaMenu.css('display', 'none');
        }
        */
        
        var icone = $('.botao-menu-mobile').find('i');
        if(listaMenu.is(':hidden') == true){
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.toggle();
        }else{
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.toggle();
        }
        
        
        
        
        
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});