
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
