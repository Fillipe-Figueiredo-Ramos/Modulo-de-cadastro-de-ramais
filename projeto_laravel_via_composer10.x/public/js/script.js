const btn = document.querySelector('#AddNew')
const ShowForm = document.querySelector(".form-box");
const Hidden = document.querySelector(".card")

btn.addEventListener("click", function () {
    ShowForm.setAttribute('style', 'display: flex;');
    Hidden.setAttribute('style', 'display: none;');
});

const Closebtn = document.querySelector('#CloseBtn')

Closebtn.addEventListener('click', function(){
    ShowForm.setAttribute('style', 'display: none;');
    Hidden.setAttribute('style', 'display: flex;');
})