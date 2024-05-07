class MobileMenu {
    constructor() {
        this.menu = document.querySelector("#mobile-menu")
        this.openButton = document.querySelector("#mobile-menu-toggle")
        this.iconOpen = document.querySelector("#mobile-menu-toggle .icon-open")
        this.iconClose = document.querySelector("#mobile-menu-toggle .icon-close")
        this.events()
    }

    events() {
        this.openButton.addEventListener("click", () => this.toggleMenu())
    }

    toggleMenu() {
        this.iconOpen.classList.toggle("hidden")
        this.iconClose.classList.toggle("hidden")
        this.openButton.classList.toggle("fa-window-close")
        this.menu.classList.toggle("hidden")
    }
}

export default MobileMenu