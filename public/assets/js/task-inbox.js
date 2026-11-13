(function () {
    "use strict";

    var list = document.getElementById("skyTaskList");
    if (!list) return;

    var cards = Array.prototype.slice.call(list.querySelectorAll(".sky-task-card"));
    var search = document.getElementById("skyTaskSearch");
    var project = document.getElementById("skyProjectFilter");
    var priority = document.getElementById("skyPriorityFilter");
    var sort = document.getElementById("skySortTasks");
    var tabs = Array.prototype.slice.call(document.querySelectorAll(".sky-inbox-tab"));
    var count = document.getElementById("skyTaskCount");
    var empty = document.getElementById("skyTaskEmpty");
    var detail = document.getElementById("skyTaskDetail");
    var activeStatus = "all";

    var taskDetails = {
        "1": {code:"TSK-0248", title:"طراحی صفحه ورود", status:"در حال انجام", statusClass:"status-progress", description:"طراحی رابط کاربری صفحه ورود با تمرکز بر سادگی، خوانایی و هماهنگی با هویت بصری SkyTask. نسخه واکنش‌گرا برای موبایل و دسکتاپ نیز باید آماده شود.", project:"وبسایت شرکتی", priority:"بالا", assignee:"علی رضایی"},
        "2": {code:"TSK-0247", title:"پیاده‌سازی احراز هویت", status:"در انتظار تأیید", statusClass:"status-approval", description:"پیاده‌سازی ورود و ثبت‌نام کاربران و بررسی اعتبارسنجی فرم‌ها و دسترسی نقش‌ها.", project:"توسعه پنل مدیریت", priority:"فوری", assignee:"حامد شاکری"},
        "3": {code:"TSK-0246", title:"بررسی رابط کاربری", status:"تکمیل‌شده", statusClass:"status-done", description:"بازبینی اجزای رابط کاربری و ثبت موارد اصلاحی در نسخه نهایی.", project:"فروشگاه اینترنتی", priority:"متوسط", assignee:"سارا محمدی"},
        "4": {code:"TSK-0245", title:"اصلاح مشکلات واکنش‌گرایی", status:"معوق‌شده", statusClass:"status-late", description:"بررسی نمایش صفحات در اندازه‌های مختلف و رفع ایرادهای چیدمان موبایل و تبلت.", project:"وبسایت شرکتی", priority:"بالا", assignee:"محمد احمدی"}
    };

    function updateDetail(card) {
        var data = taskDetails[card.getAttribute("data-task")];
        if (!data) return;
        document.getElementById("skyDetailCode").textContent = data.code;
        document.getElementById("skyDetailTitle").textContent = data.title;
        document.getElementById("skyDetailDescription").textContent = data.description;
        document.getElementById("skyDetailProject").textContent = data.project;
        document.getElementById("skyDetailPriority").textContent = data.priority;
        document.getElementById("skyDetailAssignee").textContent = data.assignee;
        var status = document.getElementById("skyDetailStatus");
        status.textContent = data.status;
        status.className = "sky-status " + data.statusClass;
        cards.forEach(function (item) { item.classList.remove("is-selected"); });
        card.classList.add("is-selected");
    }

    function applyFilters() {
        var query = search.value.trim().toLowerCase();
        var projectValue = project.value;
        var priorityValue = priority.value;
        var visible = cards.filter(function (card) {
            var title = card.getAttribute("data-title");
            var matchesQuery = !query || title.toLowerCase().indexOf(query) !== -1;
            var matchesProject = !projectValue || card.getAttribute("data-project") === projectValue;
            var matchesPriority = !priorityValue || card.getAttribute("data-priority") === priorityValue;
            var matchesStatus = activeStatus === "all" || card.getAttribute("data-status") === activeStatus;
            var show = matchesQuery && matchesProject && matchesPriority && matchesStatus;
            card.style.display = show ? "" : "none";
            return show;
        });

        if (sort.value === "title") {
            visible.sort(function (a, b) {
                return a.getAttribute("data-title").localeCompare(b.getAttribute("data-title"), "fa");
            });
        } else if (sort.value === "date") {
            visible.reverse();
        }
        visible.forEach(function (card) { list.appendChild(card); });
        count.textContent = visible.length.toLocaleString("fa-IR") + " وظیفه نمایشی";
        empty.hidden = visible.length !== 0;
        if (visible.length && !visible.some(function (card) { return card.classList.contains("is-selected") && card.style.display !== "none"; })) {
            updateDetail(visible[0]);
        }
    }

    cards.forEach(function (card) {
        card.addEventListener("click", function (event) {
            if (event.target.closest(".sky-task-more")) {
                event.stopPropagation();
                window.alert("عملیات این وظیفه پس از اتصال به بک‌اند فعال می‌شود.");
                return;
            }
            updateDetail(card);
        });
        card.addEventListener("keydown", function (event) {
            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                updateDetail(card);
            }
        });
    });

    [search, project, priority, sort].forEach(function (control) {
        control.addEventListener("input", applyFilters);
        control.addEventListener("change", applyFilters);
    });

    tabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            tabs.forEach(function (item) { item.classList.remove("is-active"); });
            tab.classList.add("is-active");
            activeStatus = tab.getAttribute("data-status");
            applyFilters();
        });
    });

    document.getElementById("skyResetFilters").addEventListener("click", function () {
        search.value = "";
        project.value = "";
        priority.value = "";
        sort.value = "default";
        activeStatus = "all";
        tabs.forEach(function (tab) {
            tab.classList.toggle("is-active", tab.getAttribute("data-status") === "all");
        });
        applyFilters();
    });

    document.getElementById("skyCompleteTask").addEventListener("click", function () {
        window.alert("این دکمه نمایشی است. ثبت نهایی وظیفه پس از اتصال به منطق بک‌اند انجام می‌شود.");
    });

    var closeDetail = document.getElementById("skyCloseDetail");
    if (closeDetail) {
        closeDetail.addEventListener("click", function () {
            if (window.innerWidth <= 850) detail.classList.toggle("sky-detail-collapsed");
        });
    }
}());
