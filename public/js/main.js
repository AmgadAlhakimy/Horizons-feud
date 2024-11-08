// ----------------------------
// ------------

let number = 1;

function enlargeImage() {
    if (number === 1) {
        const img = document.getElementById('wrong-answer-image1');
        img.classList.add('enlarged');
        setTimeout(() => {
            img.classList.remove('enlarged');
        }, 1000);
        number++;

    } else if (number === 2) {
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


    } else {
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
        number = 1;
    }

    const audio = document.getElementById('wrong-audio');
    audio.currentTime = 0;
    audio.play();
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'X') {
        enlargeImage();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'T') {
        startTimer();
    }
});

function playTrueAudio() {
    const audio = document.getElementById('survey-says-audio');
    audio.currentTime = 0;
    audio.play();
}
document.addEventListener('keydown', (event) => {
    if (event.key === 'N') {
        wrongAnswer();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === 'B') {
// Go back to the previous page
        goBackOneStep();
    }
});

function goBackOneStep() {
    window.history.go(-1);
}

function wrongAnswer() {
    const img = document.getElementById('wrong-answer-image1');
    img.classList.add('enlarged');
    setTimeout(() => {
        img.classList.remove('enlarged');
    }, 1000);
    const audio = document.getElementById('wrong-audio');
    audio.currentTime = 0;
    audio.play();
}

// ---------------------------------------

let currentScore = 0; // Initialize your score variable here

function handleButtonClick(answerValue) {

    rightAnswerAudio();
    // Update the score using the passed answerValue
    currentScore += parseInt(answerValue) || 0; // Assuming answerValue is a number
    document.getElementById('score-display').innerText = 'CURRENT SCORE ' + currentScore;
}

function rightAnswerAudio() {
    const audio = document.getElementById('flip-audio');
    audio.currentTime = 0; // Rewind to the start
    audio.play();
}

function resetScore() {
    currentScore = 0; // Reset the score to 0
    document.getElementById('score-display').innerText = 'CURRENT SCORE ' + currentScore;
    number = 1;
}

// Call this function when you load the next question
function loadNextQuestion() {
    resetScore();
    // Add any additional logic to load the next question here
}

function StartTheGame() {
    const audio = document.getElementById('start-audio');
    audio.currentTime = 0; // Rewind to the start
    audio.play();
}

window.onload = function () {
    const audio = document.getElementById('start-audio');
    audio.play().catch(function (error) {
        console.log('Audio playback failed: ' + error);
    });
};

let timeLeft = 15; // Set countdown time in seconds
let timerInterval;

function startTimer() {
    const img = document.getElementById('timer-container');
    img.classList.add('timer-container');
    setTimeout(() => {
        img.classList.remove('timer-container');
    }, 1000 * 17);
    const img1 = document.getElementById('countdown');
    img1.classList.add('timer');
    setTimeout(() => {
        document.getElementById('countdown').innerText = '';
        img1.classList.remove('timer');
    }, 1000 * 17);

    timerInterval = setInterval(() => {
        if (timeLeft <= 0) {
            const audio = document.getElementById('time-is-up-audio');
            audio.currentTime = 0; // Rewind to the start
            audio.play();
            clearInterval(timerInterval);
            document.getElementById('countdown').innerText = '0';
            timeLeft = 15;
        } else {
            document.getElementById('countdown').innerText = timeLeft;
            timeLeft--;
        }
    }, 1000);

    setTimeout(() => {
        const audio = document.getElementById('timer-start-audio');
        audio.currentTime = 0; // Rewind to the start
        audio.play();
    }, 700);
}

function surveyAnswerAudio() {
    clearTimeout(this.timeout); // Clear the previous timeout
    this.timeout = setTimeout(() => {
        document.getElementById('timer-start-audio').play(); // Play audio after 3 seconds
    }, 3000);
}

function youSaidAudio() {// Clear the previous timeout
   setTimeout(() => {
        document.getElementById('you-said-audio').play(); // Play audio after 3 seconds
    }, -5000);
}


// Function to play audio
function playAudioInputs() {
   youSaidAudio();
   surveyAnswerAudio();
}

// Function to attach event listeners to input fields
function attachInputListeners() {
    const inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(input => {
        input.removeEventListener('input', playAudioInputs); // Remove existing listener to avoid duplicates
        input.addEventListener('input', playAudioInputs);
    });
}
function launchConfetti(x, y) {
    const duration = 60 * 1000; // 2 seconds
    const end = Date.now() + duration;

    const colors = ['#bb0000', '#ffffff', '#00bb00', '#0000bb'];

    (function frame() {
        // Launch confetti
        confetti({
            particleCount: 30,
            angle: 90,
            spread: 100,
            origin: { x: x, y: y },
            colors: colors
        });

        // Continue until the duration is over
        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }
    })();
}

function playAudioWinner() {
    const audio = document.getElementById('winner-audio');
    audio.currentTime = 0;
    audio.play();
}

// Attach listeners on initial load
document.addEventListener('DOMContentLoaded', attachInputListeners);

// Reattach listeners after Livewire updates
document.addEventListener('livewire:update', attachInputListeners);
