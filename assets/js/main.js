function typeWriter(element) {
    const textArray = element.innerHTML.split('');
    element.innerHTML = '';
    textArray.forEach((letter, i) => {
        setTimeout(() => element.innerHTML += letter, 150 * i);
    });
}

const title = document.querySelector('.title');



setInterval(typeWriter(title), 1);