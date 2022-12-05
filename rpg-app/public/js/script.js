
function changeStat(min, max, minPv, maxPv) {
  min = Math.ceil(0);
  max = Math.floor(14);
  minPv = Math.ceil(20);
  maxPv = Math.floor(50);
  document.getElementById('mag').value = Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('for').value = Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('agi').value = Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('int').value = Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('pv').value = Math.floor(Math.random() * (maxPv - minPv + 1) + minPv);
}

function plusStat(){
  min = Math.ceil(0);
  max = Math.floor(2);

  let magie = document.getElementById('mag').value;
  let resultMagie = parseInt(magie) + Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('mag').value = resultMagie;

  let force = document.getElementById('for').value;
  let resultForce = parseInt(force) + Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('for').value = resultForce;

  let agilite = document.getElementById('agi').value;
  let resultAgilite = parseInt(agilite) + Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('agi').value = resultAgilite;

  let intelligence = document.getElementById('int').value;
  let resultIntelligence = parseInt(intelligence) + Math.floor(Math.random() * (max - min + 1) + min);
  document.getElementById('int').value = resultIntelligence;

  let pointVie = document.getElementById('pv').value;
  let resultPointVie = parseInt(pointVie) + 5;
  document.getElementById('pv').value = resultPointVie;

}


