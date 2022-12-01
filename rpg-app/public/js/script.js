const randomInt = (min,max) => 
  max === undefined ? Math.floor(Math.random()*min)
  : min + Math.floor(Math.random()*(max - min + 1))

document.getElementById("randomStat").addEventListener("click",e => {
  document.getElementById("stat").innerHTML = randomInt(0,14)
})

