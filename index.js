// const itemincreased=(itemincreased,price)=>{
//     var interval=document.getElementById(itemincreased);
//     var price=document.getElementById(price);
//     console.log(price);
//     if(interval.value<=0){
//         interval.value=0;
//     }
//     else if(interval.value>=1 && interval.value<=5) {
//         interval.value=interval.value-1;
        
//         // interval.style.color="000";
//          price.innerHTML=parseInt(price.innerHTML)+10+'$';
//     }
    

 
//     else if(interval.value=5){
//         interval.value=5;
//          interval.style.background="red";
//         interval.style.color="#fff";
//         // price.innerHTML=parseInt(price.innerHTML)+60+'$';
//     }
    
//     //  else{
//         interval.value=parseInt(interval.value)+1;
        
        
//     //  }
// }



//remove item from add to cart

var removeitem=document.getElementsByClassName("btn-danger");
console.log(removeitem);
for(var i=0;i <removeitem.length;i++){
var button=removeitem[i];

 button.addEventListener('click', function(event){
        console.log("clicked");
        
    })}
    function myFunction() {
	var itemPrice = document.querySelector('.itemPrice').value;

	var total = +itemPrice * 10;
	document.getElementById('totalPrice').innerHTML = total;
}

var menu = document.getElementById('menu-item');
menu.style.maxHeight = '0px';
function toggle() {
	if (menu.style.maxHeight == '0px') {
		menu.style.maxHeight = '200px';
	} else {
		menu.style.maxHeight = '0px';
	}
}
function result() {
	alert('Your order placed Successfully');
}
