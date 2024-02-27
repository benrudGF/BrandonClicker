class Game {
		constructor() {
				this.score = 0;
				this.timer = null;
				this.timeElapsed = 0;
				this.scoreElement = document.getElementById('scoreGame');
				this.timerElement = document.getElementById('timer');
				this.setupEventListeners();
		}

		incrementScore() {
				this.score += 1;
				this.scoreElement.textContent = this.score;
		}

		startTimer() {
				if (this.timer === null) {
						this.timer = setInterval(() => {
								this.timeElapsed += 1;
								this.timerElement.textContent = this.timeElapsed;
						}, 1000);
				}
		}

		resetGame() {
				if (this.timer !== null) {
						clearInterval(this.timer);
						this.timer = null;
				}
				this.timeElapsed = 0;
				this.timerElement.textContent = '';
				this.score = 0;
				this.scoreElement.textContent = this.score;
		}

		setupEventListeners() {
				document.getElementById('clickMe').addEventListener('click', () => {
						this.incrementScore();
						this.startTimer();
				});

				document.getElementById('resetMe').addEventListener('click', () => {
						this.resetGame();
				});
		}
}

// When the DOM is fully loaded, create an instance of the Game class
document.addEventListener('DOMContentLoaded', () => {
		const clickerGame = new Game();
});
