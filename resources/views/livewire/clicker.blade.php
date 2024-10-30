<div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flipping Button with Sound</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f0f0;
            }
            .flip-button {
                width: 100px;
                height: 100px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 10px;
                font-size: 20px;
                cursor: pointer;
                perspective: 1000px;
                transition: transform 0.6s;
            }
            .flip-button.flipped {
                transform: rotateY(90deg);
            }
            .sound {
                display: none;
            }
        </style>
    </head>

    <button class="flip-button" id="flipButton">Flip</button>
    <audio class="sound" id="flipSound" src="{{ asset('sounds/family-feud-good-answer.mp3') }}"></audio>

    <script>
        const flipButton = document.getElementById('flipButton');
        const flipSound = document.getElementById('flipSound');

        flipButton.addEventListener('click', () => {
            flipButton.classList.toggle('flipped');
            flipSound.currentTime = 0; // Reset sound to start
            flipSound.play();
        });
    </script>
</div>
