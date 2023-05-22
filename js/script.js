const btn = document.querySelector('#AddNew')

btn.addEventListener("click", function () {

    const ShowForm = document.querySelector(".form-box");
    ShowForm.setAttribute('style', 'display: flex;');

    const Hidden = document.querySelector(".card")
    Hidden.setAttribute('style', 'display: none;');
});