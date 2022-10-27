var show_button=document.getElementById('show-btn-edit');
var hide_button=document.getElementById('hide-btn-edit');
var modal_button=document.getElementById('modal-edit');
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
function ShowButton()
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