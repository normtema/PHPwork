let burger=document.querySelector('.burger'),
    links = document.querySelector('.links');

burger.addEventListener('click', () => {
    if(links.style.display == 'none') {
      links.style.display = 'block';
    } else {
      links.style.display = 'none';
    }
});