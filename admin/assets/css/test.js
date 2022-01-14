function Effectto(slider,duration,amin,animTime){
    // Variable Initializations
    // We can modify here.
    
    var sliderId = slider || 'slider';
    var current = 1;
    var time = duration || 5;
    var effect = amin || 'show';
    var effectTime = animTime || '1s';
    var prevId = 'prev';
    var nextId = 'next';
    ////////////////////////////////////////////
    // Total No of Slides And Button Id Initializations
    var count = document.getElementById(sliderId).childElementCount;
    
    var prev = document.getElementById(prevId);
    var next = document.getElementById(nextId);
    ////////////////////////////////////////
    
    // Fuction Creation and Event Handleing
    
    prev.addEventListener('click',prevAction);
    next.addEventListener('click',nextAction);
    
    function hideAll(){
    for(var i = 1; i<=count;i++){
      var id = 'slide'+i;
      var slide = document.getElementById(sliderId).children[i-1];
      slide.className = 'hide';
     }
    }
    
    function show(no,name,duretion){
       hideAll();
       var slide = document.getElementById(sliderId).children[no-1];
       slide.className = 'show';
       slide.style.animationName = name;
       slide.style.animationDuration = duretion;
    }
    
    function prevAction(){
      if(current<=1){
        current = count;
      }else{
        current--;
      }
      show(current,effect,effectTime);
    }
    
    function nextAction(){
      if(current>=count){
        current = 1;
      }else{
        current++;
      }
      show(current,effect,effectTime);
    }
    
    // First Time Init
    show(current,effect,effectTime);
    
    // Auto Slide Mode
    setInterval(function auto(){
      if(current>=count){
        current = 1;
      }else{
        current++;
      }
      show(current,effect,effectTime);
    },(1000*time));
    
    //console.log(count);
    //var slide = document.getElementById("slider");
    //
    console.log(sliderId);
    //console.log(current);
    
    };