/*------------------------------------On First Load---------------------------------------*/


update_generator_title('MrBeast');
setGenerator('MrBeast');








/*------------------------------------Generate---------------------------------------*/


document.querySelector('.generate-idea').addEventListener('click', () => {

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









/*-------------------------------------Update Generator Title---------------------------------------*/

function update_generator_title(generator_name)
{
    document.querySelector('.explanation').innerText = '(っ◔◡◔)っ  ' + generator_name.replace(/_/g," ") + ' idea generator';
    
}







