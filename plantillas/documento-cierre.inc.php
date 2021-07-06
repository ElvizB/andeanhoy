<!--firebase-->
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-firestore.js"></script>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<script type="text/javascript" src="<?php echo RUTA_JS?>global.js"></script>
<!-- Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>loader.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>app.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>agente.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>menu.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>drown-down.js"></script>
<script type="text/javascript">
// const langEl = document.querySelector(".langWrap");
// const link = document.querySelectorAll("a");
// const titleEl = document.querySelector(".mensajeSend");
// const descrEl = document.querySelector(".mensajeForm");

// link.forEach((el) => {
//     el.addEventListener("click", () => {
//         langEl.querySelector(".active").classList.remove("active");
//         el.classList.add("active");
//         const attr = el.getAttribute("language");
//         titleEl.textContent = data[attr].mensajeSend;
//         descrEl.textContent = data[attr].mensajeForm;
//     });
// });

// var data = {
//     espanol: {
//         mensajeSend: "Mensaje Enviado",
//         mensajeForm: ' "Tu mensaje ha sido enviado. Un miembro de nuestro equipo te contactara en breve. Que tengas un buen dia!"',
//     },
//     english: {
//         mensajeSend: "Message Send",
//         mensajeForm: "Your message has been sent. A member of our team will contact you soon. Have a good day!",
//     },
// };
new WOW().init();
</script>
</body>

</html>