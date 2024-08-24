document.addEventListener('DOMContentLoaded' , function () {
 const button1 = document.getElementById('btn1');
 const p = document.getElementById('text');
 button1.addEventListener('click', () => {
    p.textContent = 'Fortnite';
 })
})