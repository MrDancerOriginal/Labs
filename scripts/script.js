let counter = 0;

function increment(){
    counter++;
    document.getElementById("countText").innerHTML = counter;
    
    if (counter >= 10) {
        alert("Досить мучити мишку");
    }
}

function pasteHTML(){
    document.getElementById("buttonSection").innerHTML = '<button onclick="increment()">Натиснути</button> Кількість разів натискання : <font id="countText">0</font>';
}

pasteHTML();

