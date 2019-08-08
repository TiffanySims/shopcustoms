

document.querySelectorAll('.btn ,.big-btn').forEach(button => {
    button.addEventListener('click',() => {
        document.querySelector('.popup').style.display='block';
})
})

