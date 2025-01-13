import { animate } from 'motion'
import './bootstrap'

let btnMenu = document.querySelector('#btn-menu')

btnMenu.addEventListener("click", () => {
    animate('#icon-menu', {
        rotate: 360,
        duration: 1
    })
})
