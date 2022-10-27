var show_button=document.getElementById('show-btn-delete');
var hide_button=document.getElementById('hide-btn-delete');
var modal_button=document.getElementById('modal-delete');
show_button.onclick=function()
{
    show_button.style.display='none';
    modal_button.style.display='block';
    hide_button.style.display='block';
}
hide_button.onclick=function()
{
    modal_button.style.display='none';
    hide_button.style.display='block';
    show_button.style.display='block';
}