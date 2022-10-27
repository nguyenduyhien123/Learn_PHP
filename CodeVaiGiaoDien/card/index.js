var location=1;
function Move1()
{
    // Đầu tiên chúng ta chọn bất kì phần tử nào dựa vào chỉ số của nó
    const node=document.querySelectorAll('.card1')[location];
    // Sau đó chúng ta thêm nó vào đầu hoặc cuối thì Javascript sẽ được hiểu là di chuyển phần tử
    document.querySelector('.container').append(node);
    if(location < document.querySelectorAll('.card1').length)
    {
        location=1;
    }
    location++;
}
function Move2()
{
    // Đầu tiên chúng ta chọn bất kì phần tử nào dựa vào chỉ số của nó
    const node=document.querySelectorAll('.card1')[2];
    // Sau đó chúng ta thêm nó vào đầu hoặc cuối thì Javascript sẽ được hiểu là di chuyển phần tử
    document.querySelector('.container').append(node);
}