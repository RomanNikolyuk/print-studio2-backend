function sideNav() {
    const mobileMenu = document.querySelector('.sidenav');
    const instance = M.Sidenav.init(mobileMenu);

    document.querySelector('.menu-mobile__trigger').addEventListener('click', () => {
        instance.open();
    });

    document.querySelector('.menu-mobile').addEventListener('click', (event) => {
        if (event.target.nodeName === 'A') {
            instance.close();
            console.log('closing')

        }
    });


}

sideNav();