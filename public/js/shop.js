const filterButtons = document.querySelectorAll(".filter-tags");

// Attach click event listener to filter buttons
filterButtons.forEach((filterButton) => {
    filterButton.addEventListener("click", () => {
        const filter = filterButton.dataset.filter;
        const clientCards = document.querySelectorAll(".item-card");

        console.log(clientCards);
        // Show/hide client cards based on the selected filter
        clientCards.forEach((clientCard) => {
            const cardStatus = clientCard.dataset.status;

            if (filter === "all" || cardStatus === filter) {
                clientCard.classList.remove("hide");
            } else {
                clientCard.classList.add("hide");
            }
        });
    });
});