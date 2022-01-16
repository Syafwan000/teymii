function copyLink() {
    const URL = document.querySelector('#URL').value;
    const btnLink = document.querySelector('.btn-link');
    let text = document.querySelector('#copyText');

    text.textContent = 'Disalin';
    btnLink.classList.add('copied');

    setInterval(function() {
        text.textContent = 'Salin Link'
        btnLink.classList.remove('copied')
    }, 1000);

    navigator.clipboard.writeText(URL);
}