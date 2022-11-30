function myFunction() {
    document.querySelector("change").innerHTML = "";

    buttonChange.addEventListener('click',()=>{

          
    })
}

function statistic(min, max) {
    min = Math.ceil(0);
    max = Math.floor(14);
    return Math.floor(Math.random() * (max - min + 1) + min);
}
function statistic(min, max) {
    min = Math.ceil(20);
    max = Math.floor(50);
    return Math.floor(Math.random() * (max - min + 1) + min);
}

function modifier(min, max, minPv,maxPv)
{
    document.querySelector("change").innerHTML = "";

    min = Math.ceil(0);
    max = Math.floor(14);
    minPv = Math.ceil(20);
    maxPv = Math.floor(50);

    document.getElementById('statistic',).value = Math.floor(Math.random() * (max - min + 1) + min);
    document.getElementById('statisticPv').value = Math.floor(Math.random() * (maxPv - minPv + 1) + minPv);
}