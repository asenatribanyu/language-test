// Upload Story Condition
document.addEventListener("DOMContentLoaded", function () {
    var storyType = localStorage.getItem("storyType");
    var selectSection = document.getElementById("select-section");
    var storyArea = document.getElementById("story-area");
    var richText = document.getElementById("rich-text");

    if (storyType === "part iv") {
        storyArea.innerHTML = `
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Audio Short Talk</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="story" accept="audio/*" required>`;
        selectSection.innerHTML = `
        <option value="iv" selected>Listening Part IV</option>`;
    } else if (storyType === "part vii") {
        richText.classList.remove("hidden");
        // CkEditor5
        ClassicEditor.create(document.querySelector("#editor")).catch(
            (error) => {
                console.log(error);
            }
        );
        selectSection.innerHTML = `<option value="vii" selected>Reading Part VII</option>`;
    }
});
