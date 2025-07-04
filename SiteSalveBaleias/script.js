document.querySelectorAll(".item-menu").forEach(item => {
    let tooltips = item.getAttribute("data-tooltips");
    if (tooltips) {
        let tooltipContainer = document.createElement("div");
        tooltipContainer.style.position = "absolute";
        tooltipContainer.style.left = "100%";
        tooltipContainer.style.top = "0";
        tooltipContainer.style.display = "flex";
        tooltipContainer.style.flexDirection = "column";
        tooltipContainer.style.gap = "5px";

        tooltips.split(",").forEach((text) => {
            let tooltip = document.createElement("span");
            tooltip.className = "tooltip";
            tooltip.textContent = text.trim();
            tooltipContainer.appendChild(tooltip);
        });

        item.appendChild(tooltipContainer);
    }

    item.addEventListener("mouseenter", () => {
        item.querySelectorAll(".tooltip").forEach(tooltip => {
            tooltip.style.opacity = "1";
            tooltip.style.visibility = "visible";
        });
    });

    item.addEventListener("mouseleave", () => {
        item.querySelectorAll(".tooltip").forEach(tooltip => {
            tooltip.style.opacity = "0";
            tooltip.style.visibility = "hidden";
        });
    });
});
