var maxCharacters = 60;

document.getElementById("input-topic-field").maxLength = maxCharacters;
document.querySelector(".characters-remaining").innerHTML = "Char remaining: " + maxCharacters;



/*----------------------------------INPUT FIELD---------------------------------------*/



document.querySelector("#input-topic-field").addEventListener( 'click', () => {

  if(document.querySelector(".dropdown-content").style.display != 'block')
  {
    document.querySelector(".dropdown-content").style.display = 'block';
  }
  
  
});



jQuery(document).ready(function($){

  $(window).click(function() {
    document.querySelector(".dropdown-content").style.display = 'none';
  });
  
  $('.dropdown').click(function(event){
    event.stopPropagation();
  });
  

});














/**
 * Update Char Remaining
 */

  
jQuery(document).ready(function($){

  $('#input-topic-field').bind('input propertychange', function() {

      var inputTxt = document.querySelector("#input-topic-field").value;
      document.querySelector(".characters-remaining").innerText = 'Char remaining: ' + (maxCharacters - inputTxt.length);
      filterFunction();
  });

  

});






/*--------------------------GENERATE IDEA---------------------------*/

document.querySelector('.generate-idea').addEventListener('click', () => {

    document.querySelector('.generate-idea').style.pointerEvents = 'none';
    document.querySelector('.generate-idea').style.background = 'grey' ;

    //Set promptTopic
    let data = {
        'generator' : 'Vox'
    };

    
   

    //Generate Story
    jQuery.post( '/generator-return-idea', data, function(response) {
      let idea = response.replace(/(\r\n|\n|\r)/gm, "");
      document.querySelector('#input-topic-field').value = idea;
        console.log(response);
      document.querySelector('.generate-idea').style.pointerEvents = 'auto';
      document.querySelector('.generate-idea').style.background = 'red' ;
    })

    //Update database
    jQuery.post( '/generator-ai-api-call', data, function(response) {
        console.log(response);
    } )
    
    
})







/*--------------------------GENERATE CONTENT---------------------------*/

document.querySelector('.generate-content').addEventListener('click', () => {

    document.querySelector('.generate-content').style.pointerEvents = 'none';
    document.querySelector('.generate-content').style.background = 'grey' ;

    //Set promptTopic
    let data = {
        'promptTopic' : document.getElementById("input-topic-field").value
    };

    
   

    //Generate Story
    jQuery.post( '/educational-video-tools-api-call', data, function(response) {
      let idea = response.replace(/(\r\n|\n|\r)/gm, "");
      document.querySelector('.titleText').innerText = idea;
      console.log(response);

      document.querySelector('.generate-content').style.pointerEvents = 'auto';
      document.querySelector('.generate-content').style.background = 'red' ;
    })
    
    
})








