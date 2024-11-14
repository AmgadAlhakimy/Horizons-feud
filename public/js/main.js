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
    if (event.key === 'M') {
        document.getElementById('final-audio').play();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'N') {
        wrongAnswer();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'T') {
        startTimer();
    }
});
document.addEventListener('keydown', function(event) {
    if (event.key === 'P') {
        document.getElementById('bell-question').click();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'B') {
// Go back to the previous page
        goBackOneStep();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === 'n') {
        document.getElementById('nextQ').click();
    }
});


document.addEventListener('keydown', (event) => {
    if (event.key === '1') {
        document.getElementById('dreamers-audio').play();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '2') {
        document.getElementById('dreamers-audio').pause();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '3') {
        document.getElementById('danza-audio').play();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '4') {
        document.getElementById('danza-audio').pause();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '5') {
        document.getElementById('calm-down-audio').play();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '6') {
        document.getElementById('calm-down-audio').pause();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '7') {
        document.getElementById('French-audio').play();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '8') {
        document.getElementById('French-audio').pause();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '9') {
        document.getElementById('wait-audio').play();
    }
});
document.addEventListener('keydown', (event) => {
    if (event.key === '0') {
        document.getElementById('wait-audio').pause();
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

let timeLeft = 25; // Set countdown time in seconds
let timerInterval;

function startTimer() {
    const img = document.getElementById('timer-container');
    img.classList.add('timer-container');
    setTimeout(() => {
        img.classList.remove('timer-container');
    }, 1000 * 27);
    const img1 = document.getElementById('countdown');
    img1.classList.add('timer');
    setTimeout(() => {
        document.getElementById('countdown').innerText = '';
        img1.classList.remove('timer');
    }, 1000 * 27);

    timerInterval = setInterval(() => {
        if (timeLeft <= 0) {
            const audio = document.getElementById('time-is-up-audio');
            audio.currentTime = 0; // Rewind to the start
            audio.play();
            clearInterval(timerInterval);
            document.getElementById('countdown').innerText = '0';
            timeLeft = 25;
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
        document.getElementById('you-said-audio').play(); // Play audio after 3 seconds
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
    const duration = 10000 * 1000; //
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
