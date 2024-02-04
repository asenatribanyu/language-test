// Dark Toggle
const darkModeToggle = document.getElementById("examDarkMode");
const toggleIcons = document.querySelectorAll(".toggle-icon");
const html = document.querySelector("html");

function setDarkModePreference(isDarkMode) {
    localStorage.setItem("darkModePreference", isDarkMode);
}

function toggleDarkMode() {
    html.classList.toggle("dark");
    toggleIcons.forEach((icon) => icon.classList.toggle("hidden"));
    const isDarkMode = html.classList.contains("dark");
    setDarkModePreference(isDarkMode);
}

const savedDarkModePreference = localStorage.getItem("darkModePreference");
if (savedDarkModePreference === "true") {
    html.classList.add("dark");
    toggleIcons.forEach((icon) => icon.classList.toggle("hidden"));
}

darkModeToggle.addEventListener("click", toggleDarkMode);

// Audio Question Toggle
document.addEventListener("DOMContentLoaded", function () {
    const playQuestionAudio = document.getElementById("playQuestionAudio");
    const pauseQuestionButton = document.getElementById("pauseQuestionButton");
    const pauseQuestionAudio = document.getElementById("pauseQuestionAudio");
    const continueQuestionAudio = document.getElementById(
        "continueQuestionAudio"
    );
    const audioQuestion = document.getElementById("audioQuestionSource");

    playQuestionAudio.addEventListener("click", function () {
        playQuestionAudio.classList.add("hidden");
        pauseQuestionButton.classList.remove("hidden");
        pauseQuestionButton.classList.add("inline-flex");
        audioQuestion.play();
    });

    pauseQuestionButton.addEventListener("click", function () {
        audioQuestion.pause();
    });

    pauseQuestionAudio.addEventListener("click", function () {
        pauseQuestionButton.classList.add("hidden");
        pauseQuestionButton.classList.remove("inline-flex");
        playQuestionAudio.classList.remove("hidden");
    });

    continueQuestionAudio.addEventListener("click", function () {
        audioQuestion.play();
    });
});

// Audio Story Toggle
document.addEventListener("DOMContentLoaded", function () {
    const playStoryAudio = document.getElementById("playStoryAudio");
    const pauseStoryButton = document.getElementById("pauseStoryButton");
    const pauseStoryAudio = document.getElementById("pauseStoryAudio");
    const continueStoryAudio = document.getElementById("continueStoryAudio");
    const audioStory = document.getElementById("audioStorySource");

    playStoryAudio.addEventListener("click", function () {
        playStoryAudio.classList.add("hidden");
        pauseStoryButton.classList.remove("hidden");
        audioStory.play();
    });

    pauseStoryButton.addEventListener("click", function () {
        audioStory.pause();
    });

    pauseStoryAudio.addEventListener("click", function () {
        pauseStoryButton.classList.add("hidden");
        playStoryAudio.classList.remove("hidden");
    });

    continueStoryAudio.addEventListener("click", function () {
        audioStory.play();
    });
});
