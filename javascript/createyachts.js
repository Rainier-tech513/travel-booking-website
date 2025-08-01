import {yachts} from './yachts.js';

let yachtsHTML = '';


yachts.forEach((yacht) => {
    yachtsHTML += `
        <div class="card">
            <div class="image-card-container">
                <img src="${yacht.image}">
                <div class="label">
                    <p>CHARTER</p>
                </div>
            </div>
            <div class="text-card-container">
                <h3>${yacht.name}</h3>

                <p>From €${yacht.pricepweek} EUR/per week</p>

                <div class="specs">
                    <div class="spec">
                        <img src="../images/size.png">
                        <p>${yacht.specs.length}</p>
                    </div>
                    <div class="spec">
                        <img src="../images/guests.png">
                        <p>${yacht.specs.guests} Guests</p>
                    </div>
                    <div class="spec">
                        <img src="../images/main-bed.png">
                        <p>${yacht.specs.cabins} Cabins</p>
                    </div>
                    <div class="spec">
                        <img src="../images/warehouse.png">
                        <p>${yacht.specs.builtat}</p>
                    </div>
                    <div class="spec">
                        <img src="../images/calender.png">
                        <p>${yacht.specs.builtin}</p>
                    </div>
                </div>
            </div>
        </div>
    `;
})


const gridElement = document.querySelector('.js-popular-yacht-grid');
if (gridElement) {
    gridElement.innerHTML = yachtsHTML;

    // Dynamisch de breedte van een kaart bepalen
    const firstCard = gridElement.querySelector('.card');
    let cardWidth = firstCard ? firstCard.offsetWidth : 458; // Standaard 458px als fallback

    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');

    let scrollPosition = 0;

    // Functie om te schuiven
    function scrollGrid(direction) {
        const maxScroll = gridElement.scrollWidth - gridElement.clientWidth;
        if (direction === 'right') {
            scrollPosition += cardWidth;
            if (scrollPosition > maxScroll) scrollPosition = maxScroll;
        } else if (direction === 'left') {
            scrollPosition -= cardWidth;
            if (scrollPosition < 0) scrollPosition = 0;
        }
        gridElement.scrollTo({ left: scrollPosition, behavior: 'smooth' });
    }

    // Event listeners voor pijlen
    rightArrow.addEventListener('click', () => scrollGrid('right'));
    leftArrow.addEventListener('click', () => scrollGrid('left'));

    // Optioneel: Herbereken cardWidth bij resize voor responsiviteit
    window.addEventListener('resize', () => {
        const updatedCard = gridElement.querySelector('.card');
        cardWidth = updatedCard ? updatedCard.offsetWidth : cardWidth;
    });
} else {
    console.error('Element met klasse "js-popular-yacht-grid" niet gevonden.');
}
