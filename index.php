<?php  
    require_once 'includes/config-session.php';
    require_once 'includes/signup_view.php';
    require_once 'includes/login_view.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whop</title>
    <link rel="icon" type="image/png" href="images/whop_favicon_orange.png">
    <link rel="stylesheet" href="styles/other/header.css">
    <link rel="stylesheet" href="styles/other/general.css">
    <link rel="stylesheet" href="styles/homepage/hero.css">
    <link rel="stylesheet" href="styles/homepage/mid-section.css">
    <link rel="stylesheet" href="styles/homepage/mid-section-2.css">
    <link rel="stylesheet" href="styles/homepage/card-container.css">
    <link rel="stylesheet" href="styles/homepage/cards.css">
    <link rel="stylesheet" href="styles/homepage/bottom-cta-container.css">
    <link rel="stylesheet" href="styles/homepage/bottom-contact-form.css">
</head>
<body>

    <?php require_once 'header.php'; ?>

    <section class="hero">
        <div class="info-hero">
            <h1>From Private Jet To Super Yacht</h1>
            <p>- Compliment your succes with an unforgettable holiday -</p>
            <div class="hero-ctas">
                <button class="main-cta">See Our Fleet</button>
                <button class="second-cta">Destinations</button>
            </div>
        </div>

        <div class="popular-yachts-grids">
            <div class="grid-header">
                <p>Popular Yachts</p>
                <hr class="hr-2">
            </div>

            <div class="yacht-grid">
                <div class="hero-yacht-card">
                    <img src="images/yacht-apho.jpg">
                </div>
    
                <div class="hero-yacht-card">
                    <img src="images/charter-lady-s-yacht.jpg">
                </div>
    
                <div class="hero-yacht-card">
                    <img src="images/charter-sophia-yacht.jpg">
                </div>
                
                <div class="hero-yacht-card">
                    <img src="images/charter-man-of-steel-yacht.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="top-destination">
        <div class="header-section-1">
            <h2>Top Summer Charter  Destinations 2025</h2>
        </div>
        <div class="one">
            <div class="two">
                <div class="three">
                    <img src="images/france.jpg">
                    <hr>
                </div>
                <h3>French Riviera</h3>
                <p>From Monaco to Saint-Tropez, the French Riviera exudes timeless glamour. Moor beside superyacht icons, sip rosé on private beach clubs, and revel in Riviera soirées. This is where haute couture meets haute cruising — the art of indulgence, perfected.</p>
            </div>

            <div class="two">
                <div class="three">
                    <img src="images/italy.jpg">
                    <hr>
                </div>
                <h3>Italy</h3>
                <p>Italy’s coastline is a canvas of cinematic beauty. Glide past pastel Amalfi villages, anchor in Capri’s turquoise coves, or explore Sicily’s dramatic shores. Each port reveals Michelin flavours, Renaissance treasures, and la dolce vita — best experienced by sea.</p>
            </div>

            <div class="two">
                <div class="three">
                    <img src="images/greece.jpg">
                </div>
                <h3>Greece</h3>
                <p>Sail through sapphire waters to discover Greece’s ancient wonders and island gems. From Mykonos’s chic vibrance to Santorini’s caldera views, chartering here is mythic in every sense. With Edmiston, every moment of your voyage is tailored to perfection.</p>
            </div>
        </div>
    </section>

    <section class="mid-section-2">
        <div class="blog-row blog-row-1">
            <div class="img-container">
                <img src="images/why-with-us.jpg">
            </div>
            <div class="text-container">
                <h3>WHY charter with WHOP?</h3>
                <p>Whether you’re marking a milestone or spending quality family time, our team crafts bespoke journeys that reflect your pace, passions, and the places you’ve always dreamed of exploring.  <br><br>

                Onboard, your yacht becomes a private sanctuary, where every detail is meticulously tailored to your preferences, elevating every moment at sea. <br><br>
                
                With decades of combined expertise, the crew are more than hosts—they’re discreet experts who anticipate your every need. A dedicated chef curates custom menus to suit your tastes, drawing on global flavours and the finest local ingredients. <br><br>
                
                Thoughtfully curated activities, from tranquil moments on deck to exhilarating days on the water, are paired with intuitive, discreet service—ensuring your time onboard is nothing short of extraordinary. </p>
                <button>Enquire</button>
            </div>
        </div>

        <div class="blog-row blog-row-2">
            <div class="text-container">
                <h3>Yacht CHARTER DESTINATIONS.</h3>
                <p>Edmiston opens the door to the world’s most coveted coastlines — from the sunlit Mediterranean to the mythic Greek Islands. Cruise the Adriatic, unwind on the Amalfi Coast, or soak in the Riviera’s glamour. Wherever you dream of exploring, Edmiston makes it happen. </p>
                <button>Enquire</button>
            </div>
            <div class="img-container">
                <img src="images/why-charter-with-us-2.jpg">
            </div>
        </div>

        <div class="blog-row blog-row-3">
            <div class="img-container">
                <img src="images/why-charter-with-us-2.jpg">
            </div>
            <div class="text-container">
                <h3>Yacht CHARTER DESTINATIONS.</h3>
                <p>Edmiston opens the door to the world’s most coveted coastlines — from the sunlit Mediterranean to the mythic Greek Islands. Cruise the Adriatic, unwind on the Amalfi Coast, or soak in the Riviera’s glamour. Wherever you dream of exploring, Edmiston makes it happen. </p>
                <button>Enquire</button>
            </div>
        </div>
    </section>

    
    <section class="card-containerr">
        <div class="grid-info">
            <div class="headerrr">
                <div>
                    <h1>Explore some of our most POPULAR YACHTS for charter.
                    </h1>
                </div>
                <div class="yacht-grid-btn-container">
                    <button>GET IN TOUCH</button>
                </div>
            </div>
            <div class="popular-yacht-grid js-popular-yacht-grid">
                

            </div>
            <div class="arrow-container"> 
                <div class="arrow-grid"> 
                    <img src="images/arrow-left.png" class="left-arrow">
                    <img src="images/arrow-right.png" class="right-arrow">
                </div>
            </div>
        </div>
    </section>

    <section class="bottom-cta-container">
        <div class="bottom-cta">
            <div>
                <h3>Your dream charter is just a conversation away.
                </h3>
            </div>
            <div>
                <button>Get In Touch</button>
            </div>
        </div>
    </section>

    <section class="bottom-contact-form-container">
        <form class="bottom-contact-form" method="post" action="">

            <div class="contact-header-container">
                <h3>Whatever you have in mind, let us know and we will make it happen.</h3>
            </div>

            <div class="input-row">
                <div class="input-container">
                    <label for="first-name">FIRST NAME</label>
                    <input type="text" id="first-name" name="firstname">
                </div>
                <div class="input-container">
                    <label for="surname">SURNAME</label>
                    <input type="text" id="surname" name="surname">
                </div>
            </div>
            <div class="input-row">
                <div class="input-container">
                    <label for="email">EMAIL</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="input-container">
                    <label for="phone">PHONE NUMBER</label>
                    <input type="tel" id="phone" name="phone">
                </div>
            </div>
            <div class="input-row">
                <div class="radio-container">
                    <div class="question">
                        <label>DO YOU HAVE A LOCATION IN MIND?</label>
                    </div>
                    <div class="radios">
                        <label for="MyRadioId1" class="radio">
                            <input type="radio" id="MyRadioId1" name="location" class="radio-input" value="The CarriBean">
                            <div class="radio-radio"></div>
                            The Caribbean
                        </label>
            
                        <label for="MyRadioId2" class="radio">
                            <input type="radio" id="MyRadioId2" name="location" class="radio-input" value="The Mediterranean">
                            <div class="radio-radio"></div>
                            The Mediterranean
                        </label>
            
                        <label for="MyRadioId3" class="radio">
                            <input type="radio" id="MyRadioId3" name="location" class="radio-input" value="other">
                            <div class="radio-radio"></div>
                            Other
                        </label>
                    </div>
                </div>
                <div class="radio-container">
                    <div class="question">
                        <label>DO YOU HAVE A LOCATION IN MIND?</label>
                    </div>
                    <div class="radios">
                        <label for="MyRadioId4" class="radio">
                            <input type="radio" id="MyRadioId4" name="weeklybudget" class="radio-input" value="€500k+">
                            <div class="radio-radio"></div>
                            €500k+
                        </label>
            
                        <label for="MyRadioId5" class="radio">
                            <input type="radio" id="MyRadioId5" name="weeklybudget" class="radio-input" value="€250-€500k">
                            <div class="radio-radio"></div>
                            €250-€500k
                        </label>
            
                        <label for="MyRadioId6" class="radio">
                            <input type="radio" id="MyRadioId6" name="weeklybudget" class="radio-input" value="€100-€250k">
                            <div class="radio-radio"></div>
                            €100-€250k
                        </label>

                        <label for="MyRadioId7" class="radio">
                            <input type="radio" id="MyRadioId7" name="weeklybudget" class="radio-input" value="lessthen€100k">
                            <div class="radio-radio"></div>
                            &lt;€100-€250k
                        </label>
                    </div>
                </div>
            </div>
            <div class="input-row">
                <div class="radio-container">
                    <div class="question">
                        <label>DO YOU HAVE A LOCATION IN MIND?</label>
                    </div>
                    <div class="radios">
                        <label for="MyRadioId8" class="radio">
                            <input type="radio" id="MyRadioId8" name="numberofguests" class="radio-input" value="any">
                            <div class="radio-radio"></div>
                            Any
                        </label>
            
                        <label for="MyRadioId9" class="radio">
                            <input type="radio" id="MyRadioId9" name="numberofguests" class="radio-input" value="upto6">
                            <div class="radio-radio"></div>
                            Up to 6
                        </label>
            
                        <label for="MyRadioId10" class="radio">
                            <input type="radio" id="MyRadioId10" name="numberofguests" class="radio-input" value="6-8">
                            <div class="radio-radio"></div>
                            6-8
                        </label>

                        <label for="MyRadioId11" class="radio">
                            <input type="radio" id="MyRadioId11" name="numberofguests" class="radio-input" value="8-10">
                            <div class="radio-radio"></div>
                            8-10
                        </label>

                        <label for="MyRadioId12" class="radio">
                            <input type="radio" id="MyRadioId12" name="numberofguests" class="radio-input" value="10-12">
                            <div class="radio-radio"></div>
                            10-12
                        </label>

                        <label for="MyRadioId13" class="radio">
                            <input type="radio" id="MyRadioId13" name="numberofguests" class="radio-input" value="12+">
                            <div class="radio-radio"></div>
                            12+
                        </label>
                    </div>
                </div>
                <div class="input-container">
                    <label for="message">MESSAGE</label>
                    <textarea name="message" id="message"></textarea>
                </div>
            </div>

            <div class="contact-button-container">
                <button type="submit">Submit</button>
            </div>
            
        </form>
    </section>
    


    <script src="javascript/general.js"></script>
    <script type="module" src="javascript/createyachts.js"></script>
</body>
</html>