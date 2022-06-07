/*============
NavBar
=============*/

/*
document.querySelector(".home").addEventListener( 'click', () => {

    window.location = "/";

} )

document.querySelector(".generators").addEventListener( 'click', () => {

    window.location = "/generators";

} )

document.querySelector(".pricing").addEventListener( 'click', () => {

    window.location = "/pricing";

} )

document.querySelector(".about").addEventListener( 'click', () => {

    window.location = "/about";

} )

*/










/*---------------------------------SET GENERATOR------------------------------*/


function setGenerator(generator_name)
{
    if(window.location.pathname != '/')
    {

        window.location.pathname = '/';

    }
    
    
    update_generator_title(generator_name);
    
    
    generator = generator_name;

    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
    }

    selectedItem = '';
}





/*======================================== Generator Menu ============================================*/

var selectedItem = '';


//Challenges
document.querySelector(".challenges").addEventListener( 'click', () => {

    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }

    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'challenges')
        {
            document.querySelector(".menu-challenges-container").style.display = 'block';
            selectedItem = 'challenges';
        }
        else
        {
            selectedItem = '';
        }
        
    }

} )





//Education
document.querySelector(".education").addEventListener( 'click', () => {
    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }
    
    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'education')
        {
            document.querySelector(".menu-education-container").style.display = 'block';
            selectedItem = 'education';
        }
        else
        {
            selectedItem = '';
        }
    }

} )






//Psychology
document.querySelector(".psychology").addEventListener( 'click', () => {
    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }
    
    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'psychology')
        {
            document.querySelector(".menu-psychology-container").style.display = 'block';
            selectedItem = 'psychology';
        }
        else
        {
            selectedItem = '';
        }
    }

} )




//Minecraft
document.querySelector(".minecraft").addEventListener( 'click', () => {
    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }
    
    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'minecraft')
        {
            document.querySelector(".menu-minecraft-container").style.display = 'block';
            selectedItem = 'minecraft';
        }
        else
        {
            selectedItem = '';
        }
    }

} )




//Gaming
document.querySelector(".gaming").addEventListener( 'click', () => {
    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }
    
    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'gaming')
        {
            document.querySelector(".menu-gaming-container").style.display = 'block';
            selectedItem = 'gaming';
        }
        else
        {
            selectedItem = '';
        }
    }

} )







//Online Business
document.querySelector(".online-business").addEventListener( 'click', () => {
    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }
    
    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'online-business')
        {
            document.querySelector(".menu-online-business-container").style.display = 'block';
            selectedItem = 'online-business';
        }
        else
        {
            selectedItem = '';
        }
    }

} )






//Reactions
document.querySelector(".reactions").addEventListener( 'click', () => {
    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }

    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'reactions')
        {
            document.querySelector(".menu-reactions-container").style.display = 'block';
            selectedItem = 'reactions';
        }
        else
        {
            selectedItem = '';
        }
    }

} )

//Review
document.querySelector(".review").addEventListener( 'click', () => {
    
    if(window.location.pathname != '/')
    {
        window.location.pathname = '/';
    }

    var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if (screenWidth < 475)
    {
        unselectAll();
        if (selectedItem != 'review')
        {
            document.querySelector(".menu-review-container").style.display = 'block';
            selectedItem = 'review';
        }
        else
        {
            selectedItem = '';
        }
    }

} )







function unselectAll()
{
    document.querySelector(".menu-challenges-container").style.display = 'none';
    document.querySelector(".menu-education-container").style.display = 'none';
    document.querySelector(".menu-psychology-container").style.display = 'none';
    document.querySelector(".menu-minecraft-container").style.display = 'none';
    document.querySelector(".menu-gaming-container").style.display = 'none';
    document.querySelector(".menu-online-business-container").style.display = 'none';
    document.querySelector(".menu-reactions-container").style.display = 'none';
    document.querySelector(".menu-review-container").style.display = 'none';
}


    
    

