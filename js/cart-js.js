
var total = 10;
document.getElementById('totalCost').innerHTML="$"+total;

function incrementValue()
{
    var value = parseInt(document.getElementById('quantity').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    total += 10;
    document.getElementById('totalCost').innerHTML="$"+total;
    document.getElementById('quantity').value = value;
}
function decrementValue()
{
    var value = parseInt(document.getElementById('quantity').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value === 1)
    {
      alert("to proceed pls delete");
      return;
    }
    value--;
    total -= 10;
    document.getElementById('totalCost').innerHTML="$"+total;
    document.getElementById('quantity').value = value;
}
function newDiscount()
{
    var discountstring = ' ';
    var arr =["1","2","3","4","5","6","7","8","9","0","a","b","c","d","e","f",
              "g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w",
              "x","y","z"];
    for (var i = 6; i > 0; i--)
        discountstring += arr[Math.floor(Math.random() * arr.length)];

    alert(discountstring);
}
