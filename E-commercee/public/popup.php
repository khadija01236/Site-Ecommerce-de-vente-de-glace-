
<!-- PopUp -->
<div class="popup hide-popup">
    <div class="popup-content">
        <div class="popup-close">
            <i class='bx bx-x'></i>
        </div>
        <div class="popup-left">
            <div class="popup-img-container">
                <img class="popup-img" src="images/young.png" alt="popup">
            </div>
        </div>
        <div class="popup-right">
            <div class="right-content">
                <h1>Obtenez une Réduction de <span>50%</span></h1>
                <p>Inscrivez-vous à notre newsletter et économisez 30% sur votre prochain achat. Pas de spam, promis !</p>
                <form action="#">
                    <input type="email" placeholder="Entrez votre email..." class="popup-form">
                    <a href="#">S'inscrire</a>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
/* Popup */
.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    transition: 0.3s;
    transform: scale(1);
    font-size: 1.5rem;
}

.popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 90%;
    max-width: 110rem;
    margin: 0 auto;
    height: 55rem;
    transform: translate(-50%, -50%);
    padding: 1.6rem;
    display: table;
    overflow: hidden;
    background-color: white;
    /* background-image: url('../images/bg_img1.png'); */
}

.popup-close {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 2rem;
    right: 2rem;
    padding: 0.5rem;
    background-color: green;
    border-radius: 50%;
    cursor: pointer;
}

.popup-close {
    font-size: 3rem;
    color: white;
}

.popup-left {
    display: table-cell;
    width: 50%;
    height: 100%;
    vertical-align: middle;
}

.popup-right {
    display: table-cell;
    width: 50%;
    vertical-align: middle;
    padding: 3rem 5rem;
}

.popup-img-container {
    width: 100%;
    overflow: hidden;
}

.popup-img-container img.popup-img {
    display: block;
    width: 50rem;
    padding-right: 100px;
    margin-right: 100px;
    height: 30rem;
    max-width: 100%;
    border-radius: 1rem;
    object-fit: cover;
}

.right-content {
    text-align: center;
    width: 85%;
    margin: 0 auto;
}

.right-content h1 {
    font-size: 4rem;
    color: #000;
    margin-bottom: 1.6rem;
}

.right-content h1 span {
    color: #66C3B8;
}

.right-content p {
    font-size: 1.6rem;
    color: #66C3B8;
    margin-bottom: 1.6rem;
}

.popup-form {
    width: 100%;
    padding: 1.5rem 0;
    text-indent: 1rem;
    margin-bottom: 1.6rem;
    border-radius: 3rem;
    background-color: #66C3B8;
    color: white;
    font-size: 1.8rem;
    border: none;
}

.popup-form::placeholder {
    color: white;
}

.popup-form:focus {
    outline: none;
}

.right-content a:link,
.right-content a:visited {
    display: inline-block;
    padding: 1.8rem 5rem;
    border-radius: 3rem;
    font-weight: 700;
    color: white;
    background-color: black;
    border: 1px solid black;
    transition: 0.3s;
}

.right-content a:hover {
    background-color: #66C3B8;
    border: 1px solid grey;
    color: black;
}

.hide-popup {
    transform: scale(0.2);
    opacity: 0;
    visibility: hidden;
}

@media only screen and (max-width: 1200px) {
    .right-content {
        width: 100%;
    }

    .right-content h1 {
        font-size: 3.5rem;
        margin-bottom: 1.3rem;
    }
}

@media only screen and (max-width: 998px) {
    .popup-right {
        width: 100%;
    }

    .popup-left {
        display: none;
    }

    .right-content h1 {
        font-size: 5rem;
    }
}

@media only screen and (max-width: 768px) {
    .right-content h1 {
        font-size: 4rem;
    }

    .right-content p {
        font-size: 1.6rem;
    }

    .popup-form {
        width: 90%;
        margin: 0 auto;
        padding: 1.8rem 0;
        margin-bottom: 1.5rem;
    }

    .goto-top:link,
    .goto-top:visited {
        right: 5%;
        bottom: 5%;
    }
}

@media only screen and (max-width: 568px) {
    .popup-right {
        padding: 0 1.6rem;
    }

    .popup-content {
        height: 35rem;
        width: 90%;
        margin: 0 auto;
    }

    .right-content {
        width: 100%;
    }

    .right-content h1 {
        font-size: 3rem;
    }

    .right-content p {
        font-size: 1.4rem;
    }

    .popup-form {
        width: 100%;
        padding: 1.5rem 0;
        margin-bottom: 1.3rem;
    }

    .right-content a:link,
    .right-content a:visited {
        padding: 1.5rem 3rem;
    }

    .popup-close {
        top: 1rem;
        right: 1rem;
        padding: 0.5rem;
    }
}
</style>

<script>
    // Popup
    const popup = document.querySelector(".popup");
    const closePopup = document.querySelector(".popup-close");

    if (popup) {
        closePopup.addEventListener("click", () => {
            popup.classList.add("hide-popup");
        });

        window.addEventListener("load", () => {
            setTimeout(() => {
                popup.classList.remove("hide-popup");
            }, 1000);
        });
    }
</script>
