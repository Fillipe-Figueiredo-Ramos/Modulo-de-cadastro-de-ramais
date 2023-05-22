const ShowForm = querrySelector('#AddNew')
const HideCard = querrySelector('#card')

ShowForm.addeventListener('click', function(){
    ShowForm.style.display('flex')
    HideCard.style.display('none')
})