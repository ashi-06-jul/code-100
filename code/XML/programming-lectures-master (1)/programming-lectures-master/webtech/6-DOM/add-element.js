
const myNewPara = document.createElement('p');
myNewPara.textContent ="I was added via JS";
document.querySelector('body').appendChild(myNewPara);

const myParagraph = document.querySelectorAll('p')

myParagraph.forEach(function(p){
    p.textContent = "No matter who you are, I will change you!!!"
})

