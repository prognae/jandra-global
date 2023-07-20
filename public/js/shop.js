const filterButtons = document.querySelectorAll(".filter-tags");

// Attach click event listener to filter buttons
filterButtons.forEach((filterButton) => {
    filterButton.addEventListener("click", () => {
        const filter = filterButton.dataset.filter;
        const clientCards = document.querySelectorAll(".item-card");

        var count = clientCards.length
        
        //onsole.log(clientCards); Show/hide client cards based on the selected filter
        clientCards.forEach((clientCard) => {
            const cardStatus = clientCard.dataset.status;

            if (filter === "all" || cardStatus === filter) {
                clientCard.classList.remove("hide");
                count += 1
            } else {
                clientCard.classList.add("hide");
                count -= 1
            }
        });
        document.getElementById('result_count').innerHTML = count/2
    });
});

const searchBar = document.querySelector('.search')
searchBar.addEventListener('input', () => {
    input = searchBar.value.toLowerCase()
    var itemCards = document.querySelectorAll(".item-card");
    var count = 0

    for (i = 0; i < itemCards.length; i++) { 
        if (!itemCards[i].innerHTML.toLowerCase().includes(input)) {
            itemCards[i].style.display="none";
        }
        else {
            itemCards[i].style.display="list-item";        
            count += 1
        }
    }
    document.getElementById('result_count').innerHTML = count
})