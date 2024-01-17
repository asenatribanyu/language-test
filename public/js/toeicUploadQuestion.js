// Upload Question Condition
document.addEventListener("DOMContentLoaded", function () {
    var questionType = localStorage.getItem("questionType");
    var photographInput = document.getElementById("photograph");
    var audioInput = document.getElementById("audio");
    var questionInput = document.getElementById("question");
    var questionCase = document.getElementById("question-case");
    var answerD = document.getElementById("answer_d");
    var richText = document.getElementById("richtext");
    var storyInput = document.getElementById("story");
    var header = document.getElementById("heading");

    if (questionType === "part i") {
        header.innerHTML = "TOEIC Upload Question Part I";
        photographInput.innerHTML = `
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Photograph</label>
            <input id="file_input" type="file" name="photograph" accept="image/*" required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            >`;
        audioInput.innerHTML = `
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Audio Question</label>
            <input id="file_input" type="file" name="audio" accept="audio/*" required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            >`;
    } else if (questionType === "part ii") {
        header.innerHTML = "TOEIC Upload Question Part II";
        audioInput.innerHTML = `
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Audio Question</label>
            <input id="file_input" type="file" name="audio" accept="audio/*" required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            >`;
        answerD.innerHTML = ``;
    } else if (["part iii", "part iv"].includes(questionType)) {
        if (questionType === "part iii") {
            header.innerHTML = "TOEIC Upload Question Part III";
            audioInput.innerHTML = `
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Audio Conversation</label>
            <input id="file_input" type="file" name="audio" accept="audio/*" required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            >`;
        } else if (questionType === "part iv") {
            header.innerHTML = "TOEIC Upload Question Part IV";
        }
        questionInput.innerHTML = `
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="text-input">Question</label>
            <input id="text-input" type="text" name="question" placeholder="Enter the question here" required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            >`;
    } else if (["part v", "part vi"].includes(questionType)) {
        if (questionType === "part v") {
            header.innerHTML = "TOEIC Upload Question Part V";
        } else if (questionType === "part vi") {
            header.innerHTML = "TOEIC Upload Question Part VI";
        }
        questionInput.innerHTML = `
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="text-input">Question</label>
            <textarea id="text-input" name="question" rows="5" placeholder="Enter the question here" required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
            </textarea>`;
    } else if (questionType === "part vii") {
        header.innerHTML = "TOEIC Upload Question Part VII";
        questionInput.innerHTML = `
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="text-input">Question</label>
            <input id="text-input" type="text" name="question" placeholder="Enter the question here" required
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            >`;
    }

    if (questionType === "part i") {
        questionCase.innerHTML = `<input type="hidden" value="1" name="questionCase">`;
    } else if (questionType === "part ii") {
        questionCase.innerHTML = `<input type="hidden" value="2" name="questionCase">`;
    } else if (questionType === "part iii") {
        questionCase.innerHTML = `<input type="hidden" value="3" name="questionCase">`;
    } else if (questionType === "part iv") {
        questionCase.innerHTML = `<input type="hidden" value="4" name="questionCase">`;
    } else if (questionType === "part v") {
        questionCase.innerHTML = `<input type="hidden" value="5" name="questionCase">`;
    } else if (questionType === "part vi") {
        questionCase.innerHTML = `<input type="hidden" value="6" name="questionCase">`;
    } else if (questionType === "part vii") {
        questionCase.innerHTML = `<input type="hidden" value="7" name="questionCase">`;
    }
});
