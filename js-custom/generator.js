/*------------------------------------On First Load---------------------------------------*/


//update_generator_title('MrBeast');
//setGenerator('MrBeast');


let generator = 'challenges';





/*------------------------------------Generate---------------------------------------*/


document.querySelector('.generate-button').addEventListener('click', () => {



    //Set generator
    let data = {
        'generator' : generator
    };


    console.log(generator);
    //Get title
    jQuery.post( '/generator-return-idea', data, function(response) {
        let idea = response.replace(/(\r\n|\n|\r)/gm, "");
        document.querySelector('.idea').innerText = idea;
        console.log(response);
    } )
    
    
    //Update database
    jQuery.post( '/generator-ai-api-call', data, function(response) {
        console.log(response);
    })

    
    

    let random = Math.floor(Math.random() * 50);

    if (random < 2) {
        
    }

    
})









/*-------------------------------------Update Generator Title---------------------------------------*/

function update_generator(generator_name)
{
    generator = generator_name;
    console.log(generator);
    
}







