const adm_buttons = document.querySelectorAll('.adm_btn');
const adm_btn_rad = adm_buttons[0].style;
console.log(adm_btn_rad);
adm_buttons.forEach(function(button) {
  button.addEventListener('mouseenter', function(e) {
    const rad = e.target.style.borderTopRightRadius;
    console.log(e.target.style.borderTopRightRadius);
    e.target.parentElement.style.borderTopRightRadius = rad;    
    e.target.parentElement.style.borderBottomRightRadius = rad;
  });
  button.addEventListener('mouseleave', function(e) {
    e.target.parentElement.style.borderTopRightRadius = '10px';    
    e.target.parentElement.style.borderBottomRightRadius = '10px';
  });
});