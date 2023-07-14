const scriptURL = 'https://script.google.com/macros/s/AKfycbw6TvjM_8SH0Mk02VNIN2tTSg-M5or4iY-WQSLU7AYVk0Uiqm0yVRHLzfOOsavlNyC2/exec'
const form = document.forms['makeContact']

form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, {
            method: 'post',
            body: new FormData(form)
        })
        .then(response => alert("Thank you! your form is submitted successfully."))
        .then(() => {
            window.location.reload();
        })
        .catch(error => console.error('Error!', error.message))
})