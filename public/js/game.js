class ScoreCounter {
    constructor(scoreElementId) {
        this.score = 0;
        this.scoreElement = document.getElementById(scoreElementId);
        this.updateScoreDisplay();
    }

    incrementScore() {
        this.score++;
        this.updateScoreDisplay();
    }

    resetScore() {
        this.score = 0;
        this.updateScoreDisplay();
    }

    updateScoreDisplay() {
        this.scoreElement.innerText = this.score;
    }
}

class Timer {
    constructor(timerElementId) {
        this.timerElement = document.getElementById(timerElementId);
        this.startTime = null;
        this.intervalId = null;
        this.start();
    }

    start() {
        this.startTime = Date.now();
        this.intervalId = setInterval(() => {
            this.updateTimer();
        }, 1000);
    }

    stop() {
        clearInterval(this.intervalId);
    }

    reset() {
        this.stop();
        this.start();
    }

    updateTimer() {
        const elapsedTime = Math.floor((Date.now() - this.startTime) / 1000);
        this.timerElement.innerText = elapsedTime + 's';
    }
}

class Game {
    constructor() {
        this.scoreCounter = new ScoreCounter('scoreGame');
        this.timer = new Timer('timer');
        this.setupEventListeners();
    }

    setupEventListeners() {
        const clickMeButton = document.getElementById('clickMe');
        clickMeButton.addEventListener('click', () => {
            this.scoreCounter.incrementScore(); // Corrected to increment the score correctly
        });

        const resetMeButton = document.getElementById('resetMe');
        resetMeButton.addEventListener('click', () => {
            this.scoreCounter.resetScore();
            this.timer.reset();
            this.timer.stop();
        });
    }
}

// Initialize the game when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    const game = new Game();
});
