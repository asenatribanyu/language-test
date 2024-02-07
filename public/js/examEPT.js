// Fetch EPT Answer
$.ajax({
    url: "/fetch/exam/ept/answer",
    method: "GET",
    dataType: "json",
    success: function (data) {
        data.forEach(function (item) {
            var questionNav = $("#questionNav-" + item.question_id);
            var finishQuestionNav = $("#finishQuestionNav-" + item.question_id);

            $("#ept-answer-" + item.question_id + "-" + item.answer).prop(
                "checked",
                true
            );

            if (questionNav.length > 0 && item.answer) {
                questionNav.removeClass(
                    "w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                );
                questionNav.addClass(
                    "w-10 h-10 text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                );
            }

            if (finishQuestionNav.length > 0 && item.answer) {
                finishQuestionNav.removeClass(
                    "w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                );
                finishQuestionNav.addClass(
                    "w-10 h-10 text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                );
            }
        });
    },
    error: function (error) {
        console.error("Error fetching data:", error);
    },
});

// Post EPT Answer
function submitAnswer(questionId, answer) {
    $.ajax({
        url: "/post/exam/ept/answer",
        type: "POST",
        data: {
            question_id: questionId,
            answer: answer,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
    });
}

// Audio Question Toggle
$.ajax({
    url: "/fetch/exam/ept/question/audio",
    method: "GET",
    dataType: "json",
    success: function (data) {
        data.disabledButton.forEach(function (item) {
            $("#playQuestionAudio-" + item.question_id).prop("disabled", true);
            $("#playQuestionAudio-" + item.question_id)
                .removeClass(
                    "bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                )
                .addClass(
                    "bg-gray-400 disabled:cursor-not-allowed focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-sm p-2.5 text-center items-center me-2 dark:bg-gray-600 dark:focus:ring-gray-800"
                );
        });

        data.questionList.forEach(function (item) {
            const playQuestionAudio = document.getElementById(
                "playQuestionAudio-" + item.id
            );
            const pauseQuestionButton = document.getElementById(
                "pauseQuestionButton-" + item.id
            );
            const audioQuestionSource = document.getElementById(
                "audioQuestionSource-" + item.id
            );

            playQuestionAudio.addEventListener("click", function () {
                playQuestionAudio.classList.add("hidden");
                pauseQuestionButton.classList.remove("hidden");
                pauseQuestionButton.classList.add("inline-flex");
                audioQuestionSource.play();
            });

            audioQuestionSource.addEventListener("ended", function () {
                pauseQuestionButton.classList.add("hidden");
                pauseQuestionButton.classList.remove("inline-flex");
                playQuestionAudio.disabled = true;
                playQuestionAudio.classList.remove(
                    "hidden",
                    "bg-blue-700",
                    "hover:bg-blue-800",
                    "focus:ring-4",
                    "focus:outline-none",
                    "focus:ring-blue-300",
                    "font-medium",
                    "rounded-full",
                    "text-sm",
                    "p-2.5",
                    "text-center",
                    "inline-flex",
                    "items-center",
                    "me-2",
                    "dark:bg-blue-600",
                    "dark:hover:bg-blue-700",
                    "dark:focus:ring-blue-800"
                );
                playQuestionAudio.classList.add(
                    "bg-gray-400",
                    "disabled:cursor-not-allowed",
                    "focus:ring-4",
                    "focus:outline-none",
                    "focus:ring-gray-300",
                    "font-medium",
                    "rounded-full",
                    "text-sm",
                    "p-2.5",
                    "text-center",
                    "items-center",
                    "me-2",
                    "dark:bg-gray-600",
                    "dark:focus:ring-gray-800"
                );
            });
        });
    },
    error: function (error) {
        console.error("Error fetching data:", error);
    },
});

function submitQuestionAudio(questionId, status) {
    $.ajax({
        url: "/post/exam/ept/question/audio",
        type: "POST",
        data: {
            question_id: questionId,
            status: status,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
    });
}

// Audio Story Toggle
$.ajax({
    url: "/fetch/exam/ept/story/audio",
    method: "GET",
    dataType: "json",
    success: function (data) {
        data.disabledButton.forEach(function (item) {
            $("#playStoryAudio-" + item.story_id).prop("disabled", true);
            $("#playStoryAudio-" + item.story_id)
                .removeClass(
                    "bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                )
                .addClass(
                    "bg-gray-400 disabled:cursor-not-allowed focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-sm p-2.5 text-center items-center me-2 dark:bg-gray-600 dark:focus:ring-gray-800"
                );
        });

        data.storyList.forEach(function (item) {
            const playStoryAudio = document.getElementById(
                "playStoryAudio-" + item.id
            );
            const pauseStoryButton = document.getElementById(
                "pauseStoryButton-" + item.id
            );
            const audioStorySource = document.getElementById(
                "audioStorySource-" + item.id
            );

            playStoryAudio.addEventListener("click", function () {
                playStoryAudio.classList.add("hidden");
                pauseStoryButton.classList.remove("hidden");
                pauseStoryButton.classList.add("inline-flex");
                audioStorySource.play();
            });

            audioStorySource.addEventListener("ended", function () {
                pauseStoryButton.classList.add("hidden");
                pauseStoryButton.classList.remove("inline-flex");
                playStoryAudio.disabled = true;
                playStoryAudio.classList.remove(
                    "hidden",
                    "bg-blue-700",
                    "hover:bg-blue-800",
                    "focus:ring-4",
                    "focus:outline-none",
                    "focus:ring-blue-300",
                    "font-medium",
                    "rounded-full",
                    "text-sm",
                    "p-2.5",
                    "text-center",
                    "inline-flex",
                    "items-center",
                    "me-2",
                    "dark:bg-blue-600",
                    "dark:hover:bg-blue-700",
                    "dark:focus:ring-blue-800"
                );
                playStoryAudio.classList.add(
                    "bg-gray-400",
                    "disabled:cursor-not-allowed",
                    "focus:ring-4",
                    "focus:outline-none",
                    "focus:ring-gray-300",
                    "font-medium",
                    "rounded-full",
                    "text-sm",
                    "p-2.5",
                    "text-center",
                    "items-center",
                    "me-2",
                    "dark:bg-gray-600",
                    "dark:focus:ring-gray-800"
                );
            });
        });
    },
    error: function (error) {
        console.error("Error fetching data:", error);
    },
});

function submitStoryAudio(questionId, status) {
    $.ajax({
        url: "/post/exam/ept/story/audio",
        type: "POST",
        data: {
            story_id: questionId,
            status: status,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
    });
}

// Question Navigation Update
function updateQuestionNav() {
    $.ajax({
        url: "/fetch/exam/ept/answer",
        method: "GET",
        dataType: "json",
        success: function (data) {
            data.forEach(function (item) {
                var questionNav = $("#questionNav-" + item.question_id);

                if (questionNav.length > 0 && item.answer) {
                    questionNav.removeClass(
                        "w-10 h-10 text-sm text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                    );
                    questionNav.addClass(
                        "w-10 h-10 text-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    );
                }
            });
        },
        error: function (error) {
            console.error("Error fetching data:", error);
        },
    });
}

function submitAndUpdate(questionId, answer) {
    submitAnswer(questionId, answer);
    updateQuestionNav();
}
