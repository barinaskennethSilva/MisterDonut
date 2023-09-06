const close = document.querySelector('.closeX')
const addList = document.querySelector('.addList')
const close1 = document.querySelector('#closeX1')

// New List Function
close.addEventListener("click", function(){
  document.getElementById('newList').style.display="none";
});
addList.addEventListener("click", function(){
  document.getElementById('newList').style.display="block";
});
// Update List Function
close1.addEventListener("click", function(){
  document.getElementById('updateList').style.display="none";
});


function update(){
  document.getElementById('updateList').style.display="block";
}