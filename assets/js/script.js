const modeToggleBtn = document.getElementById('mode-toggle');
const modeIcon = document.getElementById('mode-icon');
const modeText = document.getElementById('mode-text');
let isNightMode = false;

modeToggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('night-mode');
    isNightMode = !isNightMode;
    if (isNightMode) {
        modeIcon.src = './images/moon-icon.png';  // Replace with actual moon icon file path
        modeIcon.alt = 'Night Mode Icon';
        modeText.textContent = 'Switch to Day Mode';
    } else {
        modeIcon.src = './images/sun-icon.png';   // Replace with actual sun icon file path
        modeIcon.alt = 'Day Mode Icon';
        modeText.textContent = 'Switch to Night Mode';
    }
});
