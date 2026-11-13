(function () {
    "use strict";
    var grid = document.getElementById("skyProjectGrid");
    if (!grid) return;

    var cards = Array.prototype.slice.call(grid.querySelectorAll(".sky-project-card"));
    var search = document.getElementById("skyProjectSearch");
    var group = document.getElementById("skyProjectGroup");
    var manager = document.getElementById("skyProjectManager");
    var sort = document.getElementById("skyProjectSort");
    var tabs = Array.prototype.slice.call(document.querySelectorAll(".sky-project-tab"));
    var count = document.getElementById("skyProjectCount");
    var empty = document.getElementById("skyProjectEmpty");
    var activeStatus = "all";

    var details = {
        "1": {name:"طراحی وبسایت شرکتی",description:"طراحی و توسعه وبسایت رسمی مجموعه با پنل مدیریت اختصاصی و رابط کاربری واکنش‌گرا.",status:"فعال",statusClass:"project-status-active",progress:75,group:"تیم فنی",manager:"حامد شاکری",members:"۵ نفر"},
        "2": {name:"توسعه پنل مدیریت",description:"پیاده‌سازی بخش مدیریت کاربران، نقش‌ها و دسترسی‌های سامانه.",status:"فعال",statusClass:"project-status-active",progress:45,group:"تیم فنی",manager:"علی رضایی",members:"۴ نفر"},
        "3": {name:"بازطراحی فروشگاه اینترنتی",description:"بهبود تجربه کاربری، طراحی صفحات محصول و بهینه‌سازی مسیر خرید.",status:"تکمیل‌شده",statusClass:"project-status-completed",progress:100,group:"تیم طراحی",manager:"سارا محمدی",members:"۶ نفر"},
        "4": {name:"کمپین معرفی محصول",description:"برنامه‌ریزی و اجرای کمپین محتوایی برای معرفی نسخه جدید محصول.",status:"متوقف‌شده",statusClass:"project-status-paused",progress:20,group:"تیم بازاریابی",manager:"علی رضایی",members:"۳ نفر"}
    };

    function selectCard(card) {
        var item = details[card.getAttribute("data-project-id")];
        if (!item) return;
        cards.forEach(function (el) { el.classList.remove("is-selected"); });
        card.classList.add("is-selected");
        document.getElementById("skyDetailProjectName").textContent = item.name;
        document.getElementById("skyDetailProjectDescription").textContent = item.description;
        document.getElementById("skyDetailProjectStatus").textContent = item.status;
        document.getElementById("skyDetailProjectStatus").className = "sky-project-detail-status " + item.statusClass;
        document.getElementById("skyDetailProgressText").textContent = item.progress.toLocaleString("fa-IR") + "٪";
        document.getElementById("skyDetailProgressBar").style.width = item.progress + "%";
        document.getElementById("skyDetailGroup").textContent = item.group;
        document.getElementById("skyDetailManager").textContent = item.manager;
        document.getElementById("skyDetailMembers").textContent = item.members;
    }

    function filterProjects() {
        var q = search.value.trim().toLowerCase();
        var visible = cards.filter(function (card) {
            var show = (!q || card.getAttribute("data-name").toLowerCase().indexOf(q) !== -1) &&
                (!group.value || card.getAttribute("data-group") === group.value) &&
                (!manager.value || card.getAttribute("data-manager") === manager.value) &&
                (activeStatus === "all" || card.getAttribute("data-status") === activeStatus);
            card.style.display = show ? "" : "none";
            return show;
        });
        if (sort.value === "name") {
            visible.sort(function (a, b) { return a.getAttribute("data-name").localeCompare(b.getAttribute("data-name"), "fa"); });
        } else if (sort.value === "progress") {
            visible.sort(function (a, b) { return Number(b.getAttribute("data-progress")) - Number(a.getAttribute("data-progress")); });
        }
        visible.forEach(function (card) { grid.appendChild(card); });
        count.textContent = visible.length.toLocaleString("fa-IR") + " پروژه نمایشی";
        empty.hidden = visible.length !== 0;
        if (visible.length && !visible.some(function (card) { return card.classList.contains("is-selected"); })) selectCard(visible[0]);
    }

    cards.forEach(function (card) {
        card.addEventListener("click", function (event) {
            if (event.target.closest(".sky-project-more")) {
                event.stopPropagation();
                window.alert("عملیات پروژه پس از اتصال به بک‌اند فعال می‌شود.");
                return;
            }
            selectCard(card);
        });
        card.addEventListener("keydown", function (event) {
            if (event.key === "Enter" || event.key === " ") { event.preventDefault(); selectCard(card); }
        });
    });

    [search, group, manager, sort].forEach(function (control) {
        control.addEventListener("input", filterProjects);
        control.addEventListener("change", filterProjects);
    });

    tabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            tabs.forEach(function (el) { el.classList.remove("is-active"); });
            tab.classList.add("is-active");
            activeStatus = tab.getAttribute("data-project-status");
            filterProjects();
        });
    });

    Array.prototype.slice.call(document.querySelectorAll("[data-project-view]")).forEach(function (button) {
        button.addEventListener("click", function () {
            document.querySelectorAll("[data-project-view]").forEach(function (el) { el.classList.remove("is-active"); });
            button.classList.add("is-active");
            grid.classList.toggle("is-list", button.getAttribute("data-project-view") === "list");
        });
    });

    document.getElementById("skyShowArchived").addEventListener("click", function () {
        var archivedTab = document.querySelector('[data-project-status="archived"]');
        if (archivedTab) archivedTab.click();
    });

    var close = document.getElementById("skyCloseProjectDetail");
    if (close) close.addEventListener("click", function () {
        if (window.innerWidth <= 850) document.getElementById("skyProjectDetail").classList.toggle("sky-project-detail-collapsed");
    });
}());
