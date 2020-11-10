window.showDropdown = () => {
    // document.getElementById('dropdown-info').classList.remove('dropdown-leaving');
    document.getElementById('dropdown-info').classList.add('dropdown-transition');
}

window.hideDropdown = () => {
    document.getElementById('dropdown-info').classList.remove('dropdown-transition');
    // document.getElementById('dropdown-info').classList.add('dropdown-leaving');
}
