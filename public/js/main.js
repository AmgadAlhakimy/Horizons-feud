

    // ----------------------------
    // ------------
    let number = 1;
    function enlargeImage() {
        if (number === 1 ){
        const img = document.getElementById('wrong-answer-image1');
        img.classList.add('enlarged');

        setTimeout(() => {
            img.classList.remove('enlarged');
        }, 1000);
            number++;
        }else if (number === 2){

            const img = document.getElementById('wrong-answer-image2');
            img.classList.add('enlarged1');

            setTimeout(() => {
                img.classList.remove('enlarged1');
            }, 1000);

            const img1 = document.getElementById('wrong-answer-image3');
            img1.classList.add('enlarged2');

            setTimeout(() => {
                img1.classList.remove('enlarged2');
            }, 1000);


            number++;
        }else {
            const img = document.getElementById('wrong-answer-image1');
            img.classList.add('enlarged11');

            setTimeout(() => {
                img.classList.remove('enlarged11');
            }, 1000);
            const img1 = document.getElementById('wrong-answer-image2');
            img1.classList.add('enlarged22');

            setTimeout(() => {
                img1.classList.remove('enlarged22');
            }, 1000);

            const img2 = document.getElementById('wrong-answer-image3');
            img2.classList.add('enlarged33');

            setTimeout(() => {
                img2.classList.remove('enlarged33');
            }, 1000);

        }

        const audio = document.getElementById('wrong-audio');
        audio.currentTime = 0;
        audio.play();
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
    document.getElementById('score-display').innerText = 'CURRENT SCORE '+ currentScore;
}

function resetScore() {
    currentScore = 0; // Reset the score to 0
    document.getElementById('score-display').innerText = 'CURRENT SCORE '+ currentScore;
    number = 1;
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
