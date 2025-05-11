const smoke = document.getElementById('smoke');
let angle = 0;
let scale = 1;

function animateSmoke() {
    angle += 0.2;
    scale = 1 + Math.sin(angle * 2) * 0.01;

    const translateX = Math.sin(angle) * 10;
    const translateY = Math.cos(angle) * 10;

    smoke.style.transform = `translate(${translateX}px, ${translateY}px) rotate(${angle}deg) scale(${scale})`;

    requestAnimationFrame(animateSmoke);
}

animateSmoke();

const animateTitle = () => {
    //animacion para el texto
    const title = document.getElementById("changing-title");
    if(!title) {
        return;
    }
    const phrases = [
        "Bienvenidos a SIADEG",
        "Tu gestión, nuestra tecnología",
        "Optimiza procesos con SIADEG",
        "Innovación al servicio público"
    ];
    
    let index = 0;
    
    function changeTitle() {
        title.classList.add('opacity-0','duration-300'); // Transición suave
    
        setTimeout(() => {
            index = (index + 1) % phrases.length;
            title.textContent = phrases[index];
            title.classList.remove('opacity-0','duration-300');
        }, 700);
    }
    
    setInterval(changeTitle, 3000);
}

animateTitle();