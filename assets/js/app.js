var questions ;

// var quizEnd= 0;

function getData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // console.log(this.responseText);
        let jsonResponse = JSON.parse(this.responseText);
        // console.log(" json response : ", jsonResponse);
        questions = jsonResponse; 
      }
    };
  
    xhttp.open("GET", "http://localhost/PHPQuizBE/assets/phpScripts/quizes.php", false);
    xhttp.send();
  
  }
  getData();
// console.log(questions);
// get buttons
const start = document.getElementById('start');

// get pages 
const guide = document.getElementById('guide');
const quiz = document.getElementById('quiz');
let resultPage = document.getElementById('result');


// Result elements 

const feedback          = document.getElementById('feedback'); 
const questionsTotal    = document.getElementById('questions-total'); 
const questionsAnswered = document.getElementById('questions-answered'); 
const exitQuiz          = document.getElementById('exit-quiz'); 

// progress elements
const progress          = document.getElementById('progress-fill'); 
const percentage        = document.getElementById('percentage'); 


var index,total,correctAnswers = 0;
var questionsWeHave = [];


questions.forEach(question => {
  if(question['quiz_id'] == 1){
    questionsWeHave.push(question);
  }
});
// console.log(questionsWeHave);

start.addEventListener('click',function(){
  // console.log(this);
    guide.classList.remove('active');
    quiz.classList.add('active');

    total = questionsWeHave.length;

    index = Math.floor(Math.random() * questionsWeHave.length);
    showQuestion(index);
})


// quiz elements 
const question          = document.getElementById('question');
const options           = document.getElementsByClassName('option');


options[0].addEventListener('click',()=>{
  getAnswer(options[0])
});
options[1].addEventListener('click',()=>{
  getAnswer(options[1])
});
options[2].addEventListener('click',()=>{
  getAnswer(options[2])
});
options[3].addEventListener('click',()=>{
  getAnswer(options[3])
});



function showQuestion(index){
  for(let i =0 ;i<options.length;i++){
      // console.log(options[i].parentElement);
      options[i].parentElement.classList.remove('hide');
  }
    setTimeout(()=>{
      for(let i=0;i<4;i++){
          options[i].classList.remove("disabled");
      }
  },500);

  progress.style.width = (((total+1-questionsWeHave.length)/total)*100) + '%';
  percentage.innerText = Math.floor((((total+1-questionsWeHave.length)/total)*100)) + '%';

  question.innerText = questionsWeHave[index]['question'];
  question.setAttribute('data-number',questionsWeHave[index]['answer']);
  for(let i =0 ;i<options.length;i++){
      
      options[i].innerText = questionsWeHave[index]['choice'+(i+1)];
  }

  questionsWeHave.splice(index,1);
  
  
  // console.log(total);
  // console.log(questionsWeHave.length);
  // console.log(question);
}


function getAnswer(x){

  for(let i=0;i<4;i++){
      options[i].classList.add("disabled");
  }


  let answer = question.dataset['number'];
  let uAnswer = x.dataset['number'];
  // console.log(answer);

  

  if(answer == uAnswer){
      x.classList.add('correct');
      correctAnswers++;
  }else{
      x.classList.add('incorrect');
      options[answer-1].classList.add('correct');
  }
  
  for(let i =0 ;i<options.length;i++){
    if(options[i].dataset['number'] != answer && options[i].dataset['number']!= uAnswer){
      console.log(options[i].parentElement);
      options[i].parentElement.classList.add('hide');
    }
  }

  console.log(correctAnswers);
  setTimeout(()=>{
      
      for(let i=0;i<4;i++){
          options[i].classList.remove('correct');
          options[i].classList.remove('incorrect');
      }

      if(questionsWeHave.length == 0){
          
          resultPage.classList.add("active"); 
          quiz.classList.remove("active");
          result();
          
      }else{
          index = Math.floor(Math.random() * questionsWeHave.length);
          showQuestion(index);
      }
      
  },1500)

}

const starFill = document.getElementById('star-fill');

function result(){
  if(correctAnswers == total/2){
      feedback.innerText = "THAT'S NICE";
      questionsAnswered.innerText = correctAnswers;
  }else if(correctAnswers > total/2){
      feedback.innerText = "YOU ARE REALLY SMART";
      questionsAnswered.innerText = correctAnswers;
  }else {
      feedback.innerText = "UNFORTUNATELY";
      questionsAnswered.innerText = ' just ' + correctAnswers;
  }
  questionsTotal.innerText = total;
  //  quizEnd =1;

  setTimeout(function(){
    starFill.style.width = (correctAnswers/total)*100 +'%';
  },300)
    
  //  exitQuiz.setAttribute('score',correctAnswers);
  
}


exitQuiz.onclick = () =>{
    let id = exitQuiz.getAttribute('userId');
    window.location.href = "http://localhost/PHPQuizBE/assets/phpScripts/script.php?id=" +id + "&score=" + (correctAnswers/total)*100;
}
