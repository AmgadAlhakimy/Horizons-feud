

    // ----------------------------------------
    function enlargeImage() {
        const img = document.getElementById('wrong-answer-image');
        img.classList.add('enlarged'); 
    
        const audio = document.getElementById('wrong-audio');
        audio.currentTime = 0;
        audio.play();
    
        setTimeout(() => {
            img.classList.remove('enlarged');
        }, 1000);
    }
    
    document.addEventListener('keydown', (event) => {
        if (event.key === ' ') {
            enlargeImage();
        }
    });


    // ---------------------------------------

let currentScore = 0; // Initialize your score variable here

function handleButtonClick(answerValue) {
    const audio = document.getElementById('flip-audio');
    audio.currentTime = 0; // Rewind to the start
    audio.play();

    // Update the score using the passed answerValue
    currentScore += parseInt(answerValue) || 0; // Assuming answerValue is a number
    document.getElementById('score-display').innerText =  currentScore;
}

function resetScore() {
    currentScore = 0; // Reset the score to 0
    document.getElementById('score-display').innerText = currentScore;
}

// Call this function when you load the next question
function loadNextQuestion() {
    resetScore();
    // Add any additional logic to load the next question here
}

function StartTheGame(){
    const audio = document.getElementById('start-audio');
    audio.currentTime = 0; // Rewind to the start
    audio.play();
}
