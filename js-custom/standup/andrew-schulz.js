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













/*----------------------------------FILTER---------------------------------------*/
  
function filterFunction() {
  var input, filter, suggestedTopicList;
  input = document.getElementById("input-topic-field");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  suggestedTopicList = div.querySelectorAll(".suggestedTopic");

  
  for (i = 0; i < suggestedTopicList.length; i++) {

    txtValue = suggestedTopicList[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      suggestedTopicList[i].style.display = "";
    } else {
      suggestedTopicList[i].style.display = "none";
    }
  }
}



/*--------------------------CREATE SUGGESTIONS LIST---------------------------*/

var dropdownElement = document.getElementById("myDropdown");

for(var i = 0; i < suggestions.length; i++)
{
  var sugDiv = document.createElement("DIV");
  sugDiv.innerHTML = suggestions[i];
  sugDiv.className = "suggestedTopic";
  sugDiv.onclick = function () {
    setSuggestion(this.innerText);
  };
  document.getElementById("myDropdown").appendChild(sugDiv);
}








/*--------------------------SET SUGGESTION---------------------------*/

function setSuggestion(inputText)
{
  document.querySelector("#input-topic-field").value = inputText;
  document.querySelector(".dropdown-content").style.display = 'none';
}


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






/*--------------------------Clicked Generate---------------------------*/

document.querySelector('.generate-idea').addEventListener('click', () => {

    document.querySelector('.generate').style.pointerEvents = 'none';
    document.querySelector('.generate').style.background = 'grey' ;

    //Set promptTopic
    let data = {
        'promptTopic' : document.getElementById("input-topic-field").value
    };

    
   

    //Generate Story
    jQuery.post( '/standup-story-api-call', data, function(response) {
      let idea = response.replace(/(\r\n|\n|\r)/gm, "");
      document.querySelector('.titleText').innerText = idea;
      document.querySelector('.generate').style.pointerEvents = 'auto';
      document.querySelector('.generate').style.background = 'red' ;
    })
    
    
})








