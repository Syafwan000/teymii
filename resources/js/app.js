import ClipboardJS from 'clipboard'
import './bootstrap'

if (document.querySelector('#share-link')) { new ClipboardJS('#share-link') }
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
