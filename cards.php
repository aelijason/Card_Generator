<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <link rel="stylesheet" href="cards.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    
    <main class="main" id="main">
        <aside class="aside" id="aside">
            <div class="logobox ">
                <img class="logo " src="images/logo.png" alt="Company Logo">
            </div>
            <ul class="menus">
                <li>
                    <a href="cards.php">
                        <ion-icon name="id-card-outline"></ion-icon> 
                        <span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="people-outline"></ion-icon> 
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="images-outline"></ion-icon> 
                        <span>Backgrounds</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="mail-outline"></ion-icon> 
                        <span>Email&nbspSignature</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <ion-icon name="settings-outline"></ion-icon> 
                    <span>Settings</span>
                    </a>
                </li>
            </ul>
        </aside>
        <div class="container">
            <header class="dash-header" id="dash-header">
                <nav class="dash-nav">
                    <div class="active-link">
                        Cards
                    </div>
                    <div class="active-profile flex">
                        <img class="person-profile" src="images/logo.png" alt="Person Profile">
                        <p class="name">Farhad</p>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                </nav>
            </header>

            <div class="card-search flex" >
                <div class="searchBox">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="search" name="search" id="search" placeholder="Search Cards">
                </div>
                <a href="cards.php">
                    <ion-icon name="add-outline"></ion-icon>
                </a>
               <a href="#">
                    <ion-icon name="download-outline"></ion-icon>
               </a>
                
            </div>

            <div class="cards">
                <div class="addCard">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Add Card</p>
                </div>
                <div class="designCard workCard">
                    <svg class="card-wavestyled__Wave-app__sc-4t6hon-0 eVOubz WaveMiniCardstyled__Divider-app__sc-1qpx882-1 kxONVy" preserveAspectRatio="xMinYMax meet" viewBox="0 0 246 57" xmlns="http://www.w3.org/2000/svg"><path d="M 214.7168,6.1113281 C 195.65271,5.9023124 172.37742,11.948182 137.87305,32.529297 110.16613,49.05604 86.980345,56.862784 65.015625,57 H 65 v 1 H 246 V 11.453125 C 236.0775,8.6129313 226.15525,6.2367376 214.7168,6.1113281 Z" fill="#ffffff" clip-rule="evenodd" fill-rule="evenodd"></path><path d="M 0,35.773438 V 58 H 65 L 64.97852,57 C 43.192081,57.127508 22.605139,49.707997 0,35.773438 Z " fill="#ffffff" clip-rule="evenodd" fill-rule="evenodd"></path><path fill="blue" clip-rule="evenodd" fill-rule="evenodd" d="m 0,16.7221 v 19.052 C 45.4067,63.7643 82.6667,65.4583 137.873,32.5286 193.08,-0.401184 219.54,3.87965 246,11.4535 V 6.51403 C 185.24,-16.8661 135.913,29.331 97.6933,40.8564 59.4733,52.3818 33.6467,44.1494 0,16.7221 Z "></path></svg>
                    <p class="flex"> Work</p>
                </div>
                <div class="designCard personalCard">
                    <svg class="card-wavestyled__Wave-app__sc-4t6hon-0 eVOubz WaveMiniCardstyled__Divider-app__sc-1qpx882-1 kxONVy" preserveAspectRatio="xMinYMax meet" viewBox="0 0 246 57" xmlns="http://www.w3.org/2000/svg"><path d="M 214.7168,6.1113281 C 195.65271,5.9023124 172.37742,11.948182 137.87305,32.529297 110.16613,49.05604 86.980345,56.862784 65.015625,57 H 65 v 1 H 246 V 11.453125 C 236.0775,8.6129313 226.15525,6.2367376 214.7168,6.1113281 Z" fill="#ffffff" clip-rule="evenodd" fill-rule="evenodd"></path><path d="M 0,35.773438 V 58 H 65 L 64.97852,57 C 43.192081,57.127508 22.605139,49.707997 0,35.773438 Z " fill="#ffffff" clip-rule="evenodd" fill-rule="evenodd"></path><path fill="green" clip-rule="evenodd" fill-rule="evenodd" d="m 0,16.7221 v 19.052 C 45.4067,63.7643 82.6667,65.4583 137.873,32.5286 193.08,-0.401184 219.54,3.87965 246,11.4535 V 6.51403 C 185.24,-16.8661 135.913,29.331 97.6933,40.8564 59.4733,52.3818 33.6467,44.1494 0,16.7221 Z "></path></svg>
                    <p class="flex">Personal</p>
                </div>
                <div class="designCard WorkingCard">
                    <svg class="card-wavestyled__Wave-app__sc-4t6hon-0 eVOubz WaveMiniCardstyled__Divider-app__sc-1qpx882-1 kxONVy" preserveAspectRatio="xMinYMax meet" viewBox="0 0 246 57" xmlns="http://www.w3.org/2000/svg"><path d="M 214.7168,6.1113281 C 195.65271,5.9023124 172.37742,11.948182 137.87305,32.529297 110.16613,49.05604 86.980345,56.862784 65.015625,57 H 65 v 1 H 246 V 11.453125 C 236.0775,8.6129313 226.15525,6.2367376 214.7168,6.1113281 Z" fill="#ffffff" clip-rule="evenodd" fill-rule="evenodd"></path><path d="M 0,35.773438 V 58 H 65 L 64.97852,57 C 43.192081,57.127508 22.605139,49.707997 0,35.773438 Z " fill="#ffffff" clip-rule="evenodd" fill-rule="evenodd"></path><path fill="green" clip-rule="evenodd" fill-rule="evenodd" d="m 0,16.7221 v 19.052 C 45.4067,63.7643 82.6667,65.4583 137.873,32.5286 193.08,-0.401184 219.54,3.87965 246,11.4535 V 6.51403 C 185.24,-16.8661 135.913,29.331 97.6933,40.8564 59.4733,52.3818 33.6467,44.1494 0,16.7221 Z "></path></svg>
                    <p class="flex">Card 1</p>
                </div>
                

            </div>
        </div>
    </main>
</body>
</html>