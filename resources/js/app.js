import ClipboardJS from 'clipboard'
import './bootstrap'

if (document.querySelector('#share-link')) {
    document.addEventListener('DOMContentLoaded', () => {
        new ClipboardJS('#share-link')
    })
}

document.addEventListener('alpine:init', () => {
    Alpine.data('share', () => ({
        text: 'Share',
        clicked: false,

        copyLink() {
            if (this.clicked) return
            this.text = 'Copied'
            this.clicked = true
            setTimeout(() => {
                this.text = 'Share'
                this.clicked = false
            }, 1000)
        }
    }))

    Alpine.data('song', () => ({
        focus: false,
        dropdown: true,

        focusIn() {
            this.focus = true
            this.dropdown = true
        },
        focusOut() {
            this.focus = false
        }
    }))
})

document.documentElement.classList.toggle(
    'dark',
    localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
)

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#theme-switcher').addEventListener('click', () => {
        localStorage.theme = localStorage.theme === 'dark' ? 'light' : 'dark'
        if(localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    })
})
