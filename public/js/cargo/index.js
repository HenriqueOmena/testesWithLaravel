flatpickr('.data_inicio');

const btnPlus = document.querySelector('.material-icons.plus')
const modalB = document.querySelector('.modal-body')


btnPlus.addEventListener('click', () => {
    fetch(btnPlus.dataset.url)
    .then(response => response.json())
    .then(data => {
        modalB.insertAdjacentHTML( 'beforeend', data.message);
        flatpickr('.data_inicio');
        removeRow()
    })
    .catch(error => console.error(error))
})

const removeRow = () => {
    const btnsRemove = document.querySelectorAll('.btn-remove')
    btnsRemove.forEach( btn => {
        btn.addEventListener('click', () => {
            btn.parentElement.remove();
        })
    })
}


// fetch('https://api.github.com/users/KrunalLathiya')
// .then(response => response.json())
// .then(data => {
//     console.log(data) // Prints result from `response.json()` in getRequest
// })
// .catch(error => console.error(error))

