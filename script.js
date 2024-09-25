//links
//http://eloquentjavascript.net/09_regexp.html
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions


var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = 'Chat bot' //name of the chatbot

//edit this function to change what the chatbot says
function chatbotResponse() {
  botMessage = " You're chat are not in database"; //the default message

  if (lastUserMessage === 'Hi') {
    botMessage = 'What What may i help you';
  }

  if (lastUserMessage === 'Who are the creator of this website') {
    botMessage = 'The programmers are Mr Meliton and Mr Patulot' ;
  }
  if (lastUserMessage === 'How the system it works?') {
    botMessage = 'Well, the hegemony of our culture is rooted in deep seated hatred towards the black community. Jail systems are run privately which is part of the corruption of our prison system in America. Also, we have a broken justice system.';
  }
  
  if (lastUserMessage === 'HAMSTER') {
    botMessage = 'HAAAAMSTAAAAA!';
  }
  
  if (lastUserMessage === 'Chris we gotta go') {
    botMessage = '.........';
  }
    if (lastUserMessage === 'CHRIS!') {
    botMessage = 'Wait what are we doing';
  }
  if (lastUserMessage === 'why were you late') {
    botMessage = 'My mom was trippin on some shit';
  }
  
  if (lastUserMessage === 'Why were you not at school') {
    botMessage = 'Eh, did not feel like goin';
  }
    if (lastUserMessage === 'what time is it') {
    botMessage = 'ITS MACARONI TIME';
  }
  
    if (lastUserMessage === 'Bro you wanna hang today') {
    botMessage = 'YEEEEE HAUMIE';
  }
  
  
    if (lastUserMessage === 'Put on a song') {
    botMessage = 'PUT ON SOME JUICE!';
  }
  
  if (lastUserMessage === 'hey man can you pick us up') {
    botMessage = 'of course bro';
  }
  
   if (lastUserMessage === 'dude where are you') {
    botMessage = 'dude I dont know';
  }
  

  if (lastUserMessage === 'dude freestyle') {
    botMessage = 'boom bomadad boom bodadad aummmmmm usuag lalalalalalla yeyeyeyeeeee boom bomadad boom bodadad aummmmmm usuag lalalalalalla yeyeyeyeeeee boom bomadad boom bodadad aummmmmm usuag lalalalalalla yeyeyeyeeeee';
  }
  
    if (lastUserMessage === 'DUDE') {
    botMessage = 'DUDE DUDE!!!!!';
  }
  
  
  
  
  
  
  
  
  
  
}

//
//this runs each time enter is pressed.
//It controls the overall input and output
function newEntry() {
  //if the message from the user isn't empty then run 
  if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    document.getElementById("chatbox").placeholder = "";
    //adds the value of the chatbox to the message array
    messages.push(lastUserMessage);
    //takes the return value from chatbotResponse() and outputs it
    chatbotResponse()
      //add the chatbot's name and message to the array messages
    messages.push("<b>" + botName + ":</b> " + botMessage)
      // says the message using the text to speech function written below
    Speech(botMessage);
    //outputs the last few messages to html
    for (var i = 1; i < 20; i++) {
      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
    }
  }
}

//text to Speech
//https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
function Speech(say) {
  if ('speechSynthesis' in window) {
    var utterance = new SpeechSynthesisUtterance(say);
    //utterance.volume = 1; // 0 to 1
    //utterance.rate = 1; // 0.1 to 10
    //utterance.pitch = 1; //0 to 2
    //utterance.text = 'Hello World';
    //utterance.lang = 'en-US';
    speechSynthesis.speak(utterance);
  }
}

//runs the keypress() function when a key is pressed
document.onkeypress = keyPress;
//if the key pressed is 'enter' runs the function newEntry()
function keyPress(e) {
  var x = e || window.event;
  var key = (x.keyCode || x.which);
  if (key == 13 || key == 3) {
    //runs this function when enter is pressed
    newEntry();
  }
  if (key == 38){
    console.log('hi')
    //document.getElementById("chatbox").value = lastUserMessage;
  }
}
