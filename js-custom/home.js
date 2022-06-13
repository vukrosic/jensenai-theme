/*------------------------------------Next Idea---------------------------------------*/

/*
document.querySelector('.generator').addEventListener('click', () => {

    document.querySelector('.generate').style.pointerEvents = 'none';
    document.querySelector('.generate').style.background = 'grey' ;

    //Set generator
    let data = {
        'generator' : generator
    };

    //Get title
    jQuery.post( '/generator-return-idea', data, function(response) {
        let idea = response.replace(/(\r\n|\n|\r)/gm, "");
        document.querySelector('.titleText').innerText = idea;
        document.querySelector('.generate').style.pointerEvents = 'auto';
        document.querySelector('.generate').style.background = 'red' ;
    } )
    
    
    //Update database
    jQuery.post( '/generator-ai-api-call', data, function(response) {
    } )
})
*/


/*------------------------------------Buttons---------------------------------------*/






// start now button event
document.querySelector(".startnow.buttonhome").addEventListener("click", () => {
    console.log("rly>");
    window.location = '/google-signup';
    
});


// contact button event
document.querySelector(".contact.buttonhome").addEventListener("click", () => {
    window.location = '/contact';
    
});
