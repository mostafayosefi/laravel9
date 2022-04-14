(function() {
    const bIconTemplate =
        '<svg class="{CLASS}" width="{WIDTH}" height="{HEIGHT}" fill="{FILL}"><use xlink:href="/assets/fonts/bootstrap-icons.svg#{ICON}" /></svg>';
    class BIcon extends HTMLElement {
        connectedCallback() {
            const _class = this.hasAttribute('class') ? 'bi ' + this.getAttribute('class') : 'bi';
            const _width = this.hasAttribute('width') ? this.getAttribute('width') : 16;
            const _height = this.hasAttribute('height') ? this.getAttribute('height') : 16;
            const _fill = this.hasAttribute('fill') ? this.getAttribute('fill') : 'currentColor';
            const _icon = this.hasAttribute('icon') ? this.getAttribute('icon') : 'bootstrap';

            this.outerHTML = bIconTemplate.replace('{CLASS}', _class)
                .replace('{WIDTH}', _width)
                .replace('{HEIGHT}', _height)
                .replace('{FILL}', _fill)
                .replace('{ICON}', _icon);
        }
    }
    customElements.define('b-icon', BIcon);
})();

(function() {
    class HeaderBottomSvg extends HTMLElement {
        connectedCallback() {
            this.outerHTML =
                `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="header-bottom-svg">
            <path fill="#e5e5e5" fill-opacity="1"
                d="M0,256L120,234.7C240,213,480,171,720,160C960,149,1200,171,1320,181.3L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
            </path>
        </svg>`;
        }
    }
    customElements.define('header-bottom-svg', HeaderBottomSvg);
})();