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
                        <a href="cards.php">Cards</a> 
                        <i class="fa-solid fa-chevron-right"></i>
                        New Card
                    </div>
                    <div class="active-profile flex">
                        <img class="person-profile" src="images/logo.png" alt="Person Profile">
                        <p class="name">Farhad</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </nav>
            </header>

            <div class="card-Name flex" >
                <i class="fa-solid fa-arrow-left"></i>

                <div class="searchName">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="Name" id="name" placeholder="Card Name">
                </div>
            </div>

            <div class="NewCard">
                <div class="cardPanel">
                    <form action="" method="post" class="form">
                        <div class="upload_file">
                            <label for="upload" class="upload">
                                <span>Upload a photo</span>
                                <img class="file" src="images/profile-icon.png" alt="Upload Profile Photo">
                            </label>
                            <input class="file_input" type="file" name="upload Profile" id="upload">
                        </div>
                        <div class="profile_names">
                            <div class="full_name">
                                <span>Full name</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="names">
                                <input type="text" name="prefix" value="Prefix" >
                                <input type="text" name="first_name" value="First name" >
                                <input type="text" name="middle_name" value="Middle name" >
                                <input type="text" name="last_name" value="Last name" >
                                <input type="text" name="suffix" value="Suffix" >
                                <input type="text" name="accreditations" value="Accreditations" >
                                <input type="text" name="prefered_name" value="Prefered Name" >
                                <input type="text" name="maiden_name" value="Maiden name" >
                            </div>
                        </div>
                        <div class="profile_title">
                            <textarea name="tile"></textarea>
                        </div>
                        <div class="profile_department">
                            <input type="text" name="department" value="Department">
                        </div>
                        <div class="profile_company">
                            <input type="text" name="company" value="Company">
                        </div>
                        <div class="profile_headline">
                            <textarea name="headline"></textarea>
                        </div>
                        <div class="profile_extra">
                            <label for="badges">Extra Info</label>
                            <!-- extra info -->
                        </div>
                        <div class="profile_save">
                            <button type="submit" class="save">save</button>
                        </div>
                    </form>
                </div>
                <div class="cardAddItem">
                    <div class="AddItem-title">
                        <h3>Add more information:</h3>
                    </div>
                    <div class="itemContainer">
                        <div class="addItem">
                            <i class="fa-solid fa-phone"></i>
                            <p>Phone</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-envelope"></i>
                            <p>Email</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Address</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-window-restore"></i>
                            <p>Website</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-link"></i>
                            <p>Link</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-regular fa-file-pdf"></i>
                            <p>PDF</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-twitter"></i>
                            <p>Twitter</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-linkedin"></i>
                            <p>Linkedin</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-facebook"></i>
                            <p>Facebook</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-youtube"></i>
                            <p>YouTube</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-whatsapp"></i>
                            <p>WhatsApp</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-yelp"></i>
                            <p>Yelp</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-vimeo"></i>
                            <p>Vimeo</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-paypal"></i>
                            <p>Paypal</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <p>CashApp</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-regular fa-calendar"></i>
                            <p>Calendly</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-discord"></i>
                            <p>Discord</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-twitch"></i>
                            <p>Twitch</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-telegram"></i>
                            <p>Telegram</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-skype"></i>
                            <p>Skype</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-weixin"></i>
                            <p>WeChat</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-signal"></i>
                            <p>Signal</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-toggle-on"></i>
                            <p>Nintendo Switch</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-playstation"></i>
                            <p>PSN</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-xbox"></i>
                            <p>Xbox Live</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-xing"></i>
                            <p>Xing</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-dribbble"></i>
                            <p>Dribble</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-behance"></i>
                            <p>Behance</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-pinterest-p"></i>
                            <p>Pinterest</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-patreon"></i>
                            <p>Patreon</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-line"></i>
                            <p>Line</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-regular fa-calendar-check"></i>
                            <p>Date</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-solid fa-note-sticky"></i>
                            <p>Note</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-spotify"></i>
                            <p>Spotify</p>
                        </div>
                        <div class="addItem">
                            <i class="fa-brands fa-soundcloud"></i>
                            <p>SoundCloud</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://kit.fontawesome.com/339458ac01.js" crossorigin="anonymous"></script>
</body>
</html>