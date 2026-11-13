(function () {
    "use strict";

    var sidebar = document.getElementById("skySidebar");
    var toggle = document.getElementById("skyMenuToggle");
    var overlay = document.getElementById("skySidebarOverlay");

    function closeSidebar() {
        if (sidebar) sidebar.classList.remove("is-open");
        if (overlay) overlay.classList.remove("is-visible");
    }

    if (toggle && sidebar && overlay) {
        toggle.addEventListener("click", function () {
            sidebar.classList.toggle("is-open");
            overlay.classList.toggle("is-visible");
        });
        overlay.addEventListener("click", closeSidebar);
        window.addEventListener("resize", function () {
            if (window.innerWidth > 600) closeSidebar();
        });
    }

    var filterButton = document.getElementById("skyTaskFilter");
    if (filterButton) {
        filterButton.addEventListener("click", function () {
            window.alert("فیلتر وظایف در مرحله اتصال به بک‌اند فعال می‌شود.");
        });
    }
}());
