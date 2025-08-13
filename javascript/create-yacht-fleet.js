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
                        <img src="images/size.png">
                        <p>${yacht.specs.length}</p>
                    </div>
                    <div class="spec">
                        <img src="images/guests.png">
                        <p>${yacht.specs.guests} Guests</p>
                    </div>
                    <div class="spec">
                        <img src="images/main-bed.png">
                        <p>${yacht.specs.cabins} Cabins</p>
                    </div>
                    <div class="spec">
                        <img src="images/warehouse.png">
                        <p>${yacht.specs.builtat}</p>
                    </div>
                    <div class="spec">
                        <img src="images/calender.png">
                        <p>${yacht.specs.builtin}</p>
                    </div>
                </div>
            </div>
        </div>
    `;
})

document.querySelector('.yacht-fleet-grid').innerHTML = yachtsHTML;