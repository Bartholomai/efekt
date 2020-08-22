(function($) {
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('.nav');

  const handleClick = () => {
    hamburger.classList.toggle('hamburger-close');
    nav.classList.toggle('open');
  }

  hamburger.addEventListener('click', handleClick);
})(jQuery);
